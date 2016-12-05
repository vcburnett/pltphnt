<section id="contact-us">
	<div class="internal-wrapper">

		<h2>Contact us</h2>

		<div class="section-half">
			<p>Now that you know a little bit about us, why not say “hello” and let us know about yourself? We are always looking for new challenges, so if you would like to discuss a project, you are in the right place. Simply fill out the fields below and send us your message!</p>
			<form id="contact" method="post" action="">
				<input type="hidden" name="form" value="contact-form" />
				<div id="returnmessage" class="returnmessage"></div>
				<input type="text" name="name" placeholder="Name*" />
				<input type="text" name="email" placeholder="Email*" />
				<input type="text" name="company" placeholder="Company"/>
				<textarea name="message" placeholder="Your message*"></textarea>
				<?php
					//@TODO
					//Fazer a validação dos campos enquanto usuário digita para habilitar o botão class="submit-off" class="submit-off"
				?>
				<input type="submit" value="Send us your message" class="submit-on" />
			</form>
		</div>

		<div class="section-half">
			<a href="mailto:hello@platyphant.com" id="link-email">hello(at)platyphant.com</a>
			<div class="platyphant-sm">
				<a href="https://www.linkedin.com/company/platyphant" target="_blank" class="btn-sm-platy-linkedin">
					<svg version="1.1" id="smIcon-linkedin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
						<g>
							<g>
								<path class="svg-li" d="M19.3,137.3h77.5v249.2H19.3V137.3zM58.1,13.5c24.8,0,44.9,20.1,44.9,44.9s-20.1,44.9-44.9,44.9c-24.9,0-44.9-20.1-44.9-44.9C13.1,33.6,33.2,13.5,58.1,13.5"/>
								<path class="svg-li" d="M145.4,137.3h74.2v34.1h1.1c10.3-19.6,35.6-40.3,73.3-40.3c78.4,0,92.9,51.6,92.9,118.7v136.7h-77.4V265.4c0-28.9-0.5-66.1-40.3-66.1c-40.3,0-46.5,31.5-46.5,64v123.3h-77.4L145.4,137.3L145.4,137.3z"/>
							</g>
						</g>
					</svg>
				</a>
				<a href="https://www.behance.net/platyphant" target="_blank" class="btn-sm-platy-behance">
					<svg version="1.1" id="smIcon-behance" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
						<g>
							<path class="svg-be" d="M117.7,77.1c11.5,0,21.9,1,31.5,3.1c9.5,2,17.5,5.4,24.4,10c6.7,4.6,12,10.7,15.7,18.4c3.7,7.6,5.5,17.1,5.5,28.3c0,12.1-2.8,22.3-8.3,30.4c-5.6,8.1-13.7,14.7-24.6,19.9c14.8,4.3,25.8,11.8,33.1,22.5c7.3,10.8,10.9,23.6,10.9,38.7c0,12.2-2.3,22.8-7,31.6c-4.7,9-11.2,16.2-19.1,21.8c-8,5.7-17.2,9.8-27.4,12.5s-20.7,4.1-31.5,4.1H3.9V77.1H117.7z M110.8,174.6c9.4,0,17.2-2.2,23.4-6.8c6.1-4.5,9.1-11.8,9.1-21.9c0-5.6-1-10.3-3-13.9c-2-3.6-4.8-6.4-8.2-8.4c-3.4-2.1-7.2-3.5-11.7-4.2c-4.4-0.9-9-1.2-13.7-1.2H57v56.4L110.8,174.6L110.8,174.6z M113.7,277.3c5.2,0,10.2-0.5,14.9-1.5s9-2.7,12.5-5.1c3.6-2.3,6.5-5.5,8.6-9.6c2.1-4,3.2-9.3,3.2-15.6c0-12.4-3.5-21.3-10.5-26.6s-16.3-7.9-27.7-7.9H57v66.4L113.7,277.3L113.7,277.3z"/>
							<path class="svg-be" d="M281.6,276.5c7.2,7,17.6,10.5,31,10.5c9.7,0,18-2.4,25.1-7.3c6.9-4.9,11.2-10.1,12.8-15.5h42.2c-6.8,21-17.1,36-31.1,45.1c-13.9,9.1-30.8,13.6-50.6,13.6c-13.8,0-26.1-2.2-37.3-6.6c-11.1-4.4-20.4-10.7-28.2-18.8c-7.6-8.2-13.5-17.8-17.7-29.1c-4.2-11.3-6.3-23.7-6.3-37.2c0-13.1,2.2-25.3,6.4-36.5c4.4-11.3,10.4-21.1,18.3-29.3c7.9-8.2,17.3-14.7,28.3-19.5c11-4.7,23-7.1,36.4-7.1c14.8,0,27.7,2.8,38.8,8.6c11.1,5.7,20.1,13.5,27.2,23.1.1,9.7,12.2,20.7,15.3,33.1c3.1,12.4,4.2,25.3,3.3,38.9h-126C269.7,256.4,274.4,269.4,281.6,276.5z M336.7,184.7c-5.7-6.3-15.4-9.7-27.1-9.7c-7.7,0-14,1.3-19.1,3.9c-5,2.6-9,5.8-12.1,9.6c-3.1,3.9-5.2,7.9-6.4,12.3c-1.2,4.2-2,8.1-2.2,11.5h78C346.6,200.1,342.4,191.1,336.7,184.7z"/>
							<rect x="259.9" y="93.3" class="svg-be" width="97.8" height="23.8"/>
						</g>
					</svg>
				</a>
				<a href="https://www.facebook.com/platyphant/" target="_blank" class="btn-sm-platy-facebook">
					<svg version="1.1" id="smIcon-facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">	<path id="f" class="svg-fb" d="M230.3,395.7V217.2h59.9l9-69.6h-68.9v-44.4c0-20.1,5.6-33.9,34.5-33.9l36.8,0V7.1c-6.4-0.8-28.2-2.7-53.7-2.7c-53.1,0-89.5,32.4-89.5,92v51.3H98.4v69.6h60.1v178.5H230.3z"/>
					</svg>
				</a>
				<a href="https://twitter.com/platyphant" target="_blank" class="btn-sm-platy-twitter">
					<svg version="1.1" id="smIcon-twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
						<path class="svg-t" d="M393.7,79.9c-14.3,6.3-29.6,10.6-45.6,12.5c16.4-9.8,29-25.4,34.9-44c-15.4,9.1-32.4,15.7-50.5,19.3c-14.5-15.4-35.2-25.1-58-25.1c-43.9,0-79.5,35.6-79.5,79.5c0,6.2,0.7,12.3,2.1,18.1c-66.1-3.3-124.6-35-163.8-83c-6.8,11.7-10.8,25.4-10.8,40c0,27.6,14,51.9,35.4,66.2c-13-0.4-25.3-4-36-9.9c0,0.3,0,0.7,0,1c0,38.5,27.4,70.6,63.8,77.9c-6.7,1.8-13.7,2.8-20.9,2.8c-5.1,0-10.1-0.5-15-1.4c10.1,31.6,39.5,54.6,74.2,55.2c-27.2,21.3-61.5,34-98.7,34c-6.4,0-12.7-0.4-19-1.1c35.2,22.5,76.9,35.7,121.8,35.7c146.2,0,226.1-121.1,226.1-226.1c0-3.4-0.1-6.9-0.2-10.3C369.6,109.8,383,95.8,393.7,79.9z"/>
					</svg>
				</a>
				<a href="https://www.instagram.com/platyphantcreatives/" target="_blank" class="btn-sm-platy-instagram">
					<svg version="1.1" id="smIcon-instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 503.8 503.8" style="enable-background:new 0 0 503.8 503.8;" xml:space="preserve">
						<g>
							<path d="M251.9,45.4c67.3,0,75.2,0.3,101.8,1.5c24.6,1.1,37.9,5.2,46.8,8.7c11.8,4.6,20.2,10,29,18.8c8.8,8.8,14.3,17.2,18.8,29c3.4,8.9,7.6,22.2,8.7,46.8c1.2,26.6,1.5,34.5,1.5,101.8s-0.3,75.2-1.5,101.8c-1.1,24.6-5.2,37.9-8.7,46.8c-4.6,11.8-10,20.2-18.8,29c-8.8,8.8-17.2,14.3-29,18.8c-8.9,3.4-22.2,7.6-46.8,8.7c-26.6,1.2-34.5,1.5-101.8,1.5s-75.2-0.3-101.8-1.5c-24.6-1.1-37.9-5.2-46.8-8.7c-11.8-4.6-20.2-10-29-18.8c-8.8-8.8-14.3-17.2-18.8-29c-3.4-8.9-7.6-22.2-8.7-46.8c-1.2-26.6-1.5-34.5-1.5-101.8s0.3-75.2,1.5-101.8c1.1-24.6,5.2-37.9,8.7-46.8c4.6-11.8,10-20.2,18.8-29c8.8-8.8,17.2-14.3,29-18.8c8.9-3.4,22.2-7.6,46.8-8.7C176.7,45.6,184.7,45.4,251.9,45.4 M251.9,0c-68.4,0-77,0.3-103.9,1.5C121.2,2.7,102.9,7,86.9,13.2c-16.6,6.4-30.6,15.1-44.6,29.1c-14,14-22.6,28.1-29.1,44.6c-6.2,16-10.5,34.3-11.7,61.2C0.3,174.9,0,183.5,0,251.9c0,68.4,0.3,77,1.5,103.9c1.2,26.8,5.5,45.1,11.7,61.2c6.4,16.6,15.1,30.6,29.1,44.6c14,14,28.1,22.6,44.6,29.1c16,6.2,34.3,10.5,61.2,11.7c26.9,1.2,35.4,1.5,103.9,1.5s77-0.3,103.9-1.5c26.8-1.2,45.1-5.5,61.2-11.7c16.6-6.4,30.6-15.1,44.6-29.1c14-14,22.6-28.1,29.1-44.6c6.2-16,10.5-34.3,11.7-61.2c1.2-26.9,1.5-35.4,1.5-103.9s-0.3-77-1.5-103.9c-1.2-26.8-5.5-45.1-11.7-61.2c-6.4-16.6-15.1-30.6-29.1-44.6c-14-14-28.1-22.6-44.6-29.1c-16-6.2-34.3-10.5-61.2-11.7C328.9,0.3,320.3,0,251.9,0L251.9,0z"/>
							<path d="M251.9,122.6c-71.4,0-129.4,57.9-129.4,129.4s57.9,129.4,129.4,129.4s129.4-57.9,129.4-129.4S323.4,122.6,251.9,122.6zM251.9,335.9c-46.4,0-84-37.6-84-84s37.6-84,84-84s84,37.6,84,84S298.3,335.9,251.9,335.9z"/>
							<circle cx="386.4" cy="117.4" r="30.2"/>
						</g>
					</svg>
				</a>
				<a href="https://www.pinterest.com/platyphant/" target="_blank" class="btn-sm-platy-pinterest">
					<svg version="1.1" id="smIcon-pinterest" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
						<g>
							<g>
								<path class="svg-p" d="M128.8,386.3c9.8-16,24.5-42.2,29.9-63.1c2.9-11.3,15-57.2,15-57.2c7.8,15,30.8,27.6,55.1,27.6c72.6,0,124.9-66.7,124.9-149.7c0-79.5-64.9-139-148.3-139c-103.8,0-159,69.7-159,145.6c0,35.3,18.8,79.2,48.8,93.2c4.6,2.1,7,1.2,8-3.2c0.8-3.3,4.9-19.7,6.7-27.3c0.6-2.4,0.3-4.5-1.7-6.9c-9.9-12.1-17.9-34.2-17.9-54.9c0-53.1,40.2-104.4,108.6-104.4c59.1,0,100.5,40.3,100.5,97.9c0,65.1-32.9,110.2-75.6,110.2c-23.6,0-41.3-19.5-35.6-43.5c6.8-28.6,19.9-59.5,19.9-80.1c0-18.5-9.9-33.9-30.4-33.9c-24.1,0-43.5,25-43.5,58.4c0,21.3,7.2,35.7,7.2,35.7s-23.8,100.8-28.2,119.6c-4.8,20.8-2.9,50-0.8,69C113.6,394.4,116.8,401.8,128.8,386.3z"/>
							</g>
						</g>
					</svg>
				</a>
			</div>
		</div>

	</div>
</section>