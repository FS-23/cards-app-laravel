
<style>
      #file-container:hover{
            background-color: rgb(189, 183, 183) !important;
            cursor: pointer;
        }
</style>
<x-root-layout>
   <div class="col-6 p-3 shadow-sm m-auto " style="margin-top: 150px">
     <form action="/cards/update/ {{ $card->id }}" method="post" enctype="multipart/form-data">
         @csrf
         <h3>Mettre a jour  {{ $card -> fullname }}</h3>
         <div class="mb-3 mt-5">
              <div id="file-container" class="d-flex bg-light justify-content-center align-items-center" style="height: 200px ; transition: background-color 1s">
                    <input  name="image-file" type="file" id="file-input" class="d-none" accept="image/*">

                    <img src="{{ url($card -> image) }}" id="image-preview" alt="" style="height: 98% ; width: 100% ; object-fit: contain">
              </div>
         </div>
         <div class="form-group mt-3">
            <label for="" class="form-label">Nom complet</label>
            <input required type="text" class="form-control" value= "{{ $card->fullname }}" name="fullname" >
         </div>
         <div class="form-group mt-3">
            <label for="" class="form-label">Age</label>
            <input  required  type="number" class="form-control"  value= "{{ $card->age }}" name="age" >
         </div>
         <div class="form-group mt-3">
            <label for="" class="form-label"  value= "{{ $card->gender }}" >Genre</label>
            <select  required  type="text" class="form-control" name="gender">
                 <option value="">Veuillez choisir une option</option>
                 <option value="masculin">Masculin</option>
                 <option value="feminin">Feminin</option>
            </select>
         </div>
         <div class="mt-5">
            <button class="btn btn-outline-primary"> Enregistrer </button>
            <a href="/cards/list" class="btn btn-outline-secondary">Annuler</a>
         </div>
     </form>
  </div>
  <script>
       window.onload = function(){
             let fileInput = document.querySelector('#file-input')
             let fileContainer = document.querySelector('#file-container')
             let imagePreview = document.querySelector('#image-preview')

             fileContainer.addEventListener('click' , function(){
               fileInput.click()
             })

             fileInput.addEventListener('change' , function(){
                   console.log('files:', fileInput.files[0]);
                   let reader = new FileReader();

                   reader.onload = function(){
                        console.log('result:', reader.result)
                        imagePreview.src = reader.result
                        imagePreview.style.display = ""

                        document.querySelector('#info-text').style.display = "none"
                   }


                   reader.readAsDataURL(fileInput.files[0]);
             })
       }
  </script>
</x-root-layout>
