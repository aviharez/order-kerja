<center style="background-color: #F6F6F6; padding: 30px; font-family: 'Proxima Nova', sans-serif; min-width: 730px;">
	<div style="width: 700px; background-color:#fff;margin-top:0;font-size:16px;color:#707b87; border-radius: 5px;">
	  <div style=" color: #707b87;border-radius: 5px;background-color: #ffffff; padding: 60px 40px">
		<center style="padding: 0px">
			<a href="http://localhost:8000"><img style="height:150px;" src="https://www.pupuk-kujang.co.id/dashboard_private/images/logonya.png" /></a>
		  <br />
		  <p style="margin-bottom:0; line-height: 25px; font-weight:400; font-size: 24px; margin-top: 15px">
			<b>Hello {{$nama}},</b>
		  </p>
		  <p style=" line-height: 25px; font-weight:300; font-size: 20px; margin-top: 15px">
			Terdapat order baru, tinjau sekarang 
		  </p>
		  <p style="line-height: 31.5px; font-size: 20px; font-weight: 300; margin: 20px 0;">
			{{$peminta}},<br>{{$order}}
		  </p>
		  <a href="http://localhost:8000" style=" font-size: 24px; margin: 0px 10px 0px 0px; padding: 15px 15%; height: 30px; background: #11aa88; color: white; text-decoration: none; border-radius: 10px; ">
			Approve Order
		  </a>
		  <br>
		  <br>
		</center>
	  </div>
  
	</div>
  </center>