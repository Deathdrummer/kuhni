<div class="modal fade" id="modal{{callbackform}}" modalsuccess tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-w-custom modal-dialog-centered" style="max-width: 530px;">
		<div class="modal-content bg-transparent" id="callbackFormPopper">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
			
			<div class="col-12 bcg--white-v1 ps-10 pe-10 ps-md-33 pe-md-33 pt-40 pt-md-80 pb-40 pb-md-100 text-center hide_success" success="">
				<img src="//192.168.0.103:3000/public/images/success.svg" class="w-60px mb-20px" alt="">
				<h2 class="fs-2 fw-bold mb-10px">Спасибо, заявка принята!</h2>
				{% if callback[callbackform]['success'] %}
					<p class="fs-2">{{callback[callbackform]['success']}}</p>
				{% endif %}
			</div>
		</div>
	</div>
</div>