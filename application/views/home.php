<?php $this->load->view('layout/main'); ?>
<div class="loader">
	<div class="loader-inner">
		<div class="circle"></div>
	</div>
</div>
<!--PreLoader Ends-->
<div class="hero-area hero-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 offset-lg-2 text-center">
				<div class="hero-text">
					<div class="hero-text-tablecell">
						<?php if ($message = $this->session->flashdata('error')) : ?>

							<div class="row">

								<div class="col-md-12">

									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

								</div>

							</div>

						<?php endif; ?>
						<p class="subtitle">A Solução para seu Negócio</p>
						<h1 class="text-h1">Tecnologia e Inovação</h1>
						<div class="hero-btns">
							<a href="https://wa.me/5575991731415" target="_blank" class="boxed-btn text-white">Suporte</a>
							<a href="https://wa.me/5575999754580" target="_blank" class="bordered-btn text-dark">Comercial</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>