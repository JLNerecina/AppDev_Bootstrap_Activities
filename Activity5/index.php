<!DOCTYPE html>
<html lang="en">
<head>
        <title>CCC311-18 / CCL311-18 Applications Development & Emerging Technologies (Nerecina)</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src = "js/bootstrap.min.js"></script>
    </head>

<body>
    <h1 class="jumbotron text-center">Activity 5</h1>

    <div class="container">

         <ul class="list-inline">
        <li> <a href="#" data-toggle="popover" data-placement="top" title="Top Popover" data-content="Click again to close">Top</a></li>
        <li> <a href="#" data-toggle="popover" data-placement="bottom" title="Bottom Popover" data-trigger="focus" data-content="Focus trigger">Bottom</a></li>
        <li> <a href="#" data-toggle="popover" data-placement="left" title="Left Popover" data-trigger="hover" data-content="Hover">Left</a></li>
        <li> <a href="#" data-toggle="popover" data-placement="right" title="Right Popover">Right</a></li>
    </ul>   
    

    <ul class="list-inline">
        <li> <a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
        <li> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tool Tip">Bottom</a></li>
        <li> <a href="#" data-toggle="tooltip" data-placement="left" title="Left Tool Tip">Left</a></li>
        <li> <a href="#" data-toggle="tooltip" data-placement="right" title="Right Tool Tip">Right</a></li>
    </ul>   
    </div>

    <br>
    <hr>
    <br>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 900px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
           <div class="item active">
            <img src="images/MyProfile.jpg" width="900px">
              <div class="carousel-caption">
                <h3>Me 1</h3>
                <p>This is me.</p>
             </div>
           </div>
           <div class="item">
            <img src="images/MyProfile.jpg" width="900px">
              <div class="carousel-caption">
                <h3>Me 2</h3>
                <p>This is me again.</p>
              </div>
           </div>
           <div class="item">
            <img src="images/MyProfile.jpg" width="900px">
              <div class="carousel-caption">
                <h3>Me 3</h3>
                <p>This is me once more.</p>
              </div>
           </div>

           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
        </div>

    </div>
</div>


    <br>
    <hr>
    <br>

<div class="container">
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">This is Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>This is Modal Content</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>
    

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({
                container: 'body'
            });
            $('[data-toggle="popover"]').popover({
                container: 'body'
            });
        });
    </script>
    
    </body>
</html>
 
</body>
</html>