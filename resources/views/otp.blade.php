<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OTP</title>
		<style type="text/css">
			input[type="email"]{
				height: 25px;
				width: 250px;
			}
		</style>
	</head>
	<body>
		<div style="margin: 0 auto;width: 300px;margin-top: 50px;">

			<form method="post" action="{{url('/sendotp')}}">
				@csrf
				<table>
					<tr>
						<td>Email</td>
						<td>
							<input type="email" name="email" required placeholder="Enter email address">
							@error("email")
								<small>{{$message}}</small>
							@enderror
						</td>

					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Send"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>