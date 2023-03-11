 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Choose image
 </button>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog        ">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Choose any one</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <style>
                 input[type="radio"]:checked+img {
                     /* outline: solid black;
                     outline-offset: 4px; */
                     box-shadow: 0 0 0px 4px wheat, 0 0 0px 6px grey;
                     transform: scale(1.2);
                     transition: transform 0.25s ease-in ;
                 }
                 input[type="radio"] {
                     display: none;
                 }
             </style>

             <div class="modal-body">
                 <?php
                    $sql = "SELECT *FROM filemanagers";
                    $sql_result = mysqli_query($con, $sql);

                    while ($data = mysqli_fetch_array($sql_result)) {
                    ?>
                     <label class="m-3 d-inline-block "> <!-- label is must for click on image to work??-->
                         <input type="radio" name="radioCheck" value="<?php echo $data['filelink']; ?>"> <!--removed=== class="form-control" id="exampleInputPassword1" -->
                         <img src="<?php echo '../../uploads/' . $data['filelink'] ?>" alt="" height="100" width="100">
                     </label>
                 <?php
                    };
                    ?>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="selectImage()">Save changes</button>
             </div>
         </div>
     </div>
 </div>

 <script>
  function selectImage(){
    var image= document.querySelector("input[name=radioCheck]:checked").value;
    document.getElementById("selectedImage").value=image;
  }
</script>