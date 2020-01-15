@import url(https://fonts.googleapis.com/css?family=Bree+Serif);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

* {
  margin: 0;
  padding: 0
}
body {
  background: url(http://img6.uploadhouse.com/fileuploads/17737/17737075bdad5cfa9423bb2c3c2beee695c72bb8.jpg);
  color: #B1B1B1;
  margin: 15px auto 0;
  width: 410px;
}
#contact {
  overflow: auto;
}
#contact #form {
  width:410px;
  float:left;
}
#contact #form h2 {
  font: 48px 'Bree Serif', Georgia, serif;
}
#contact #form span {
  display:block;
  float:left;
  width:100px;
  padding-top:5px;
  font: 14px/16px'Bree Serif', Georgia, serif;
}
#contact #form input {
  float:left;
  width:255px;
  border:0px;
  color:#F1F1F1;
  padding:10px 10px 10px 30px;
  font: 11px/20px'Open Sans', Verdana, Helvetica, sans-serif;
  margin-bottom:10px;
}
#contact #form textarea {
  float:left;
  border:0px;
  width:255px;
  height:140px;
  padding:10px 10px 10px 30px;
  font: 11px/20px'Open Sans', Verdana, Helvetica, sans-serif;
  color:#F1F1F1;
  resize: none;
}
#contact #form input.name {
  background:#222222 url(http://img7.uploadhouse.com/fileuploads/17737/177370145f09fe433945815665aa214f80dbc6af.png) no-repeat 10px 8px;
}
#contact #form input.email {
  background:#222222 url(http://img6.uploadhouse.com/fileuploads/17737/177370138cc63992182149e9befabff3eafa6d23.png) no-repeat 10px 9px;
}
#contact #form input.captcha {
  background:#222222 url(http://img3.uploadhouse.com/fileuploads/17737/17737011310213e71805ecf2292144cbbecf42ad.png) no-repeat 10px 9px;
}
#contact #form textarea.message {
  background:#222222 url(http://img3.uploadhouse.com/fileuploads/17737/1773701229ed8c2f465a8274623ca8976adaf196.png) no-repeat 10px 8px;
}
#contact #form input.submit {
  cursor: pointer;
  width:85px;
  height:30px;
  float:right;
  padding:0px 0px 5px 0px;
  margin:10px 16px 0px 0px;
  background:#222222;
  color:#F1F1F1;
  font: 14px/16px'Bree Serif', Georgia, serif;
}
#contact #captcha span{
  width: 44px;
}
#contact #captcha input{
  background: url(http://img3.uploadhouse.com/fileuploads/17737/17737011310213e71805ecf2292144cbbecf42ad.png) no-repeat scroll 0 0 transparent;
  margin: 5px 0 0;
  padding: 0;
  border: medium none;
  cursor: pointer;
  width: 15px;
}
<section id="contact">
					<div class="content">
						<div id="form">
							<form action="" id="contactForm" method="post">
								<span>Name</span>
								<input type="text" name="name" class="name" placeholder="Enter your name" tabindex=1 />
								<span>Email</span>
								<input type="text" name="email" class="email" placeholder="Enter your email" tabindex=2 />
								<span id="captcha"></span>
								<input type="text" name="captcha" class="captcha" maxlength="4" size="4" placeholder="Enter captcha code" tabindex=3 />
								<span>Message</span>
								<textarea class="message" placeholder="Enter your message" tabindex=4></textarea>
								<input type="submit" name="submit" value="Send e-mail" class="submit" tabindex=5>
							</form>
						</div>
			</section>
