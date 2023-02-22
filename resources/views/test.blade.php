<html>
   <head>
		<link href="{{asset('css/bootstrap.min.css')}} rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery-ui.min.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
   </head>
   <body>
      <div class="test">
         Hello
      </div>
      

      <div class="container">
			<table id="sort" class="table-hover" title="Kurt Vonnegut novels">
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
					<td>
						A+
						<input type="hidden" name="v[]" value="1">
					</td>
				 </tr>
				 <tr>
					<td class="index">2</td>
					<td>1952</td>
					<td>Player Piano</td>
					<td>
						B
						<input type="hidden" name="v[]" value="2">
					</td>
				 </tr>
				 <tr>
					<td class="index">3</td>
					<td>1963</td>
					<td>Cat's Cradle</td>
					<td>
						A+
						<input type="hidden" name="v[]" value="3">
					</td>
				 </tr>
				 <tr>
					<td class="index">4</td>
					<td>1973</td>
					<td>Breakfast of Champions</td>
					<td>
						C
						<input type="hidden" name="v[]" value="4">
					</td>
				 </tr>
				 <tr>
					<td class="index">5</td>
					<td>1965</td>
					<td>God Bless You, Mr. Rosewater</td>
					<td>
						A
						<input type="hidden" name="v[]" value="5">
					</td>
				 </tr>
			  </tbody>
			</table>
		 </div>



      <script>
         $('.test').addClass('bg-dark');
      </script>
   </body>
</html>