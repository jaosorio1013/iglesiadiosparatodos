@extends('layouts/blogDetail')

@section('content')
	<section id="blog-wrapper" class="section layout-1">
		<div class="container">
			<div class="row">
				<div class="col-md-9 content-wrapper">
					<article class="post">
						<div class="post-thumb">
							<a href="assets/img/blog/photo (1).jpg"><img src="assets/img/blog/photo (1).jpg" class="img-responsive" alt="Responsive image"></a>
						</div>
						<!-- /.post-thumb -->
						<div class="post-content">
							<h4 class="post-title">The Ultimate Guide to Adjustment Layers – Vibrance</h4>
							<p>Nisl quidam epicuri sea ex, possit senserit cu usu. Sit et justo corpora sadipscing, in doctus delicatissimi his, an consul diceret usu. Ex mundi fabulas sed, noster timeam nominavi pri ut, alii paulo simul his no. Sonet decore dicunt has ea, tation sanctus an sea. Sensibus scribentur an ius, vis lorem pertinax forensibus et, ut vim mutat nemore moderatius. Te pri diceret pericula, id eros iudicabit quo, eos sapientem adipiscing in.</p>
							<div class="row">
								<div class="col-md-6">
									<p>Lorem ipsum dolor sit amet, te eam nisl suscipiantur. Eu eam essent eruditi mandamus. Est in ubique diceret vocibus. Utinam nostro hendrerit ne eos, id aliquid expetendis interesset usu, sed eu quas vocent. Et duo feugiat mandamus.</p>
								</div>
								<div class="col-md-6">
									<p>Pro ea animal forensibus vituperatoribus, ex quando impetus duo. Id natum hendrerit vis, est error adipisci disputando te, quo et utroque facilisi volutpat. Ex ipsum equidem eam, sumo possit democritum ad vel. Eu est postea postulant.</p>
								</div>
							</div>
							<blockquote>
								<p>Ea erant impetus vel. Vivendo commune invidunt no nam. In sea facilisi consetetur. Eum diam mutat feugiat ad, facilisis explicari vim cu. Te pri voluptaria accommodare, eos viris aeterno in.</p>
							</blockquote>
							<p>Lorem ipsum dolor sit amet, te eam nisl suscipiantur. Eu eam essent eruditi mandamus. Est in ubique diceret vocibus. Utinam nostro hendrerit ne eos, id aliquid expetendis interesset usu, sed eu quas vocent. Et duo feugiat mandamus. Cum agam placerat te. Semper causae est ne, ea purto velit duo. Debet intellegebat sea ea, te vis tale saepe inimicus, sit atomorum principes eu. Sed sint ipsum delenit at, alia unum saepe ea per. Ea erant impetus vel. Vivendo commune invidunt no nam. In sea facilisi consetetur. Eum diam mutat feugiat ad, facilisis explicari vim cu. Te pri voluptaria accommodare, eos viris aeterno in.</p>
							<p>Nisl quidam epicuri sea ex, possit senserit cu usu. Sit et justo corpora sadipscing, in doctus delicatissimi his, an consul diceret usu. Ex mundi fabulas sed, noster timeam nominavi pri ut, alii paulo simul his no. Sonet decore dicunt has ea, tation sanctus an sea. Sensibus scribentur an ius, vis lorem pertinax forensibus et, ut vim mutat nemore moderatius. Te pri diceret pericula, id eros iudicabit quo, eos sapientem adipiscing in.</p>
						</div>
						<!-- /.post-content -->
						@include('blog/partials/metaData')

						@include('blog/partials/comments')
					</article>
					<!-- /.article -->
				</div>
				<!-- /.content-wrapper -->

				@include('blog/partials/sidebar')
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#blog-wrapper -->
@stop