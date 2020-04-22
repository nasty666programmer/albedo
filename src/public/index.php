
<!DOCTYPE html>
<html>
  <head>
      <title>Test</title>
      <link rel="stylesheet" href="src/public/css/style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript" src="./src/public/javascript/maps.js"></script>

    <div class="container col-7  bg-dark mt-4 text-primary card" style="width:1300px;">
        <h1 class="container">To participate in the conference, please fill out the form</h1>
        <form class="text-light container ml-5 card-body" action="src/application/store.php" method="post">
            <span class="control-group">
                <label class="control-label" >firstname*</label>
                <span class="controls">
                    <input type="text"  class="rounded" name="firstname" />
                </span>
            </span>
        
            <span class="control-group ml-5">
                <label class="control-label">lastname*</label>
                <span class="controls">
                    <input type="text" name="lastname" class="rounded"/>
                </span>
            </span>
        </br>
    </br>
         <div class="control-group ">
            <label class="control-label">birthdate*</label>
            <div class="controls ml-5">
                <input type="date" name="birthdate" class="rounded"/>
            </div>
         </div>
        </br>
         <div class="control-group">
            <label class="control-label">report subject*</label>
            <div class="controls ml-5">
                <input type="text" name="reportsubject" class="rounded"/>
            </div>
         </div>
        </br>
         <div class=" form-group">
            <label class="control-label">country*</label>
            <div class="controls ml-5">
                <select multiple="multiple" name="country"> 
                    <option>Country</option>
                    <option>Russian</option>
                    <option>Ukraine</option>
                    <option>English</option>
                    <option>United State</option>
                    <option>United Kingdom</option>
                    <option>Brazil</option>
                </select>
            </div>
         </div>
        </br>
        <div class="control-group">
            <label class="control-label">phone</label>
            <div class="controls ml-5">
                <input type="text" name="phone" class="rounded"/>
            </div>
        </div>
    </br>
         <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls ml-5">
                <input type="email" name="email" class="rounded"/>
            </div>
         </div>
        </br>
         <input type="submit" class="btn btn-primary ml-5" id="btnScroll"  value="NEXT"/>
        </form>  
      
    </div>
    <div class="container col-5  bg-dark text-primary card" style="margin-top:15em;">
        <form class="text-light container ml-5 card-body" action="src/application/store.php"  method="post" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label">Company*</label>
                <div class="controls ml-5">
                    <input type="text" class="rounded" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Position*</label>
                <div class="controls ml-5">
                    <input type="text" class="rounded"/>
                </div>
            </div>
        
         <div class="control-group">
            <label class="control-label">Aboute me</label>
            <div class="controls ml-5">
                <textarea row="3"  class="rounded"></textarea>
            </div>
         </div>
         <span class="control-group">
            <label class="control-label ss">Photo</label>
            <div class="controls ml-5">
                <input type="file" class="rounded"/>
            </div>
        </span>
        </br>
        <div class="cont-share_link">
        <input type='button' class="btn btn-primary ml-5" id="btn-share" value="Next" />
        </div>
        </form>  
        <a href="src/public/php/membersTable.php" style="margin-left:6em;">All members</a>   

  
    <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMoToatSNbNbLTdxaCV-wmfA9Vi4B9m1M&callback=initMap">
    </script>
    <script async defer type="text/javascript" src="src/public/javascript/scrollpage.js"></script>
    <script type="text/javascript" src="src/public/javascript/buttonShareLink.js"></script>
</script>
  </body>
</html>