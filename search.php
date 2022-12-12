<!DOCTYPE html>
<html>
<head>
    <style> 
        body{

        background-color: #eee; 
        }

        .card{
            background-color: #fff;
            padding: 15px;
            border:none;
        }

        .input-box{
            position: relative;
        }

        .input-box i {
            position: absolute;
            right: 13px;
            top:15px;
            color:#ced4da;
        }

        .form-control{
            height: 50px;
            background-color:#eeeeee69;
        }

        .form-control:focus{
            background-color: #eeeeee69;
            box-shadow: none;
            border-color: #eee;
        }


        .list{
            padding-top: 20px;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .border-bottom{
            border-bottom: 2px solid #eee;
        }

        .list i{
            font-size: 19px;
            color: red;
        }

        .list small{
            color:#333030;
        }

        .container{
            position: relative;
        }

        #display{
            position: absolute;
            background-color: #fff;
            width: 100%;
            margin-left: -15px;
            margin-top: 50px;
            padding: 15px;
            z-index:1000;
        }
    </style>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>
<body>
   <div class="container mt-5">

          <div class="row d-flex justify-content-center ">

            <div class="col-md-6">

                <div class="card">
                  
                  <div class="input-box">
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                    <i class="fa fa-search"></i>                    
                  </div>

                <div id="display">
                </div>
                </div>
              
            </div>
            
          </div>
          
        </div>
</body>
<script type="text/javascript">
function fill(Value) {
   $('#search').val(Value);
   $('#display').hide();
}

function call(id){
    window.location.href = "index.php?page=product-detail&&id=" + id
}

$(document).ready(function() {
   $("#search").keyup(function() {
       var name = $('#search').val();
       if (name == "") {
           $("#display").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "livesearch.php",
               data: {
                   search: name
               },
               success: function(html) {
                   $("#display").html(html).show();
               }
           });
       }
   });
});
</script>
</html>