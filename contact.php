<?php require 'tpl/header.php'; ?>
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(https://horchynsky.github.io/help/contact.jpg);">
		<h2 class="tit6 t-center">
			Зв'яжіться з нами
		</h2>
	</section>


<link rel="stylesheet" type="text/css" href="send.php">
	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 p-b-113">
		<!-- Map -->
		<div class="container">
			<div class="map bo8 bo-rad-10 of-hidden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.124219116618!2d24.029623515240655!3d49.84012343903398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add308c20f9df%3A0x6a885da71aae7bde!2sXocha+Time!5e0!3m2!1suk!2sua!4v1563218405730!5m2!1suk!2sua"  frameborder="0" style="border:0" allowfullscreen width="100%"></iframe>
			</div>
		</div>
<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Напишіть нам
			</h3>

			<form class="wrap-form-reservation size22 m-l-r-auto" method="POST" action="mail.php">
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9">
							Ім'я
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name" required="">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email" required="">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Телефон
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone" required="">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Повідомлення
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="massage" placeholder="Massage"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Відправити
					</button>
				</div>
			</form>
		</div>
	</section>

<?php require 'tpl/footer.php'; ?>