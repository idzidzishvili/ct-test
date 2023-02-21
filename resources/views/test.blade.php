<html>
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="{{asset('js/app.js')}}"></script>
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
   </head>
   <body>
      <div class="test">
         Hello
      </div>
      

      <div class="container">
         <table id="tblLocations" class="table-hover" title="Kurt Vonnegut novels">
           <thead>
             <tr>
               <th class="index">No.</th>
               <th>Year</th>
               <th>Title</th>
               <th>Grade</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="index">1</td>
               <td>1969</td>
               <td>Slaughterhouse-Five</td>
               <td>A+</td>
               <input type="hidden" name="v[]" value="1">
             </tr>
             <tr>
               <td class="index">2</td>
               <td>1952</td>
               <td>Player Piano</td>
               <td>B</td>
               <input type="hidden" name="v[]" value="2">
             </tr>
             <tr>
               <td class="index">3</td>
               <td>1963</td>
               <td>Cat's Cradle</td>
               <td>A+</td>
               <input type="hidden" name="v[]" value="3">
             </tr>
             <tr>
               <td class="index">4</td>
               <td>1973</td>
               <td>Breakfast of Champions</td>
               <td>C</td>
               <input type="hidden" name="v[]" value="4">
             </tr>
             <tr>
               <td class="index">5</td>
               <td>1965</td>
               <td>God Bless You, Mr. Rosewater</td>
               <td>A</td>
               <input type="hidden" name="v[]" value="5">
             </tr>
           </tbody>
         </table>
       </div>



      <script>
         $('.test').addClass('bg-dark');
      </script>
   </body>
</html>