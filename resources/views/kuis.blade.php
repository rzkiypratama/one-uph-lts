{% extends "base-quiz.twig" %}

{% block content %}

<section class="contactform-wrapper" style="position: absolute;
width: 0%;
z-index: 99999;
overflow: hidden">
	{% set ctf7 = post.event_contact_form ?: '[contact-form-7 id="12750" title="Someone Took A Quiz"]' %}
	{{ function('do_shortcode', ctf7 )  }}
</section>


<section class="section__quiz">


	<div id="quizWelcome" class="quiz-wrapper"
		style="background-image: url('{{function('get_template_directory_uri')}}/images/quiz/bg-quiz.png');">
		<div class="quiz-content">
			<div class="container container-intro">
				<div class="row">
					<div class="col-md-6 col-lg-4 offset-lg-1">
						<p>
							<a class="navbar-brand" href="{{site.url}}">
								<img width="150" src="{{function('get_template_directory_uri')}}/images/uph.svg"
									alt="{{site.name}}">
							</a>
						</p>
						<br>
						<p class="text-danger mb-0">
							<em>{{ __('[:en]Personality Test[:id]Kuis Test Kepribadian[:]') }}</em></p>
						<h1 class="h1 text-uppercase mb-0 page-title">
							{{ __('[:en]Know your potential[:id]Kenali Potensimu[:]') }}
						</h1>
						<p class="text-secondary">{{ __('[:en]There are many potentials within you; however, you should know what\'s the most particular of you. Let\'s find out in order to choose the most suitable study program for you![:id]Ada banyak potensi dalam dirimu namun kamu harus tahu apa yang paling khas dari pribadimu. Yuk cari tahu agar bisa memilih program studi yang paling cocok bagi kamu![:]') }}</p>
						<br>
						<p class="btn-cta-container"><a href="#" id="btn-quiz-start"
								class="btn btn-sm btn-uph btn-uph__plain-blue btn-uph__click-effect btn-cta-widget text-uppercase mb-4">{{ __('[:en]Let\'s Start[:id]Mulai[:]') }}</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal-quiz" id="quizIntro" tabindex="-1" role="dialog" aria-labelledby="quizIntroLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content text-center">
				<div class="modal-body quiz-content">
					<div class="container">
						<div class="row row-header">
							<div class="col-md-12">
								<p class="text-left">
									<a class="navbar-brand" href="{{site.url}}">
										<img width="150" src="{{function('get_template_directory_uri')}}/images/uph.svg"
											alt="{{site.name}}">
									</a>
								</p>
							</div>
						</div>
						<div class="row row-content">
							<div class="col-md-5 offset-md-1 d-flex column-header">
								<h3 class="title mb-4">{{ __('[:en]Personality Quiz[:id]Kuis Kepribadian[:]') }}</h3>
							</div>
							<div class="col-md-5 align-content-center column-card-wrapper">
								<div class="slider-tutorial-wrapper">

									<div class="slider-tutorial">
										<div class="card m-auto border-0">
											<div class="card-body mb-2">
												<img width="200" class="img-fluid my-4"
													src="{{function('get_template_directory_uri')}}/images/quiz/icon-question.png"
													alt="">
												<h3 class="card-title h4">{{ __('[:en]20 Questions[:id]20 Pertanyaan[:]') }}</h3>
												<p class="card-text">{{ __('[:en]This quiz is divided into 2 sections. The first consists of 15 questions & the second consists of 5 questions.[:id]Akan dibagi menjadi 2 sesi, sesi pertama memiliki 15 pertanyaan &amp; sesi kedua memiliki 5 pertanyaan.[:]') }}</p>
											</div>
										</div>
										<div class="card m-auto border-0">
											<div class="card-body mb-2">
												<img width="200" class="img-fluid my-4"
													src="{{function('get_template_directory_uri')}}/images/quiz/icon-personality.png"
													alt="">
												<h3 class="card-title h4">{{ __('[:en]All About You[:id]Semua Tentang Kamu[:]') }}</h3>
												<p class="card-text">{{ __('[:en]The questions are in the form of multiple choices in which you should choose the one that mostly reflects your personality.[:id]Dengan bentuk pertanyaan pilihan ganda, dimana kamu memilih jawaban yang menurut kamu sesuai dengan kepribadian kamu.[:]') }}</p>
											</div>
										</div>
										<div class="card m-auto border-0">
											<div class="card-body mb-2">
												<img width="200" class="img-fluid mt-4 mb-5"
													src="{{function('get_template_directory_uri')}}/images/quiz/icon-stats.png"
													alt="">
												<h3 class="card-title h4">{{ __('[:en]The Result[:id]Hasilnya[:]') }}</h3>
												<p class="card-text">{{ __('[:en]The result can be your reference in choosing your study program &amp; career path.[:id]Hasil yang kamu dapat bisa menjadi acuan kamu dalam menentukan jenjang karir &amp; pemilihan jurusan kamu nantinya.[:]') }}</p>
											</div>
										</div>
									</div>

									<button
										class="slider-tutorial--prev-next slider-tutorial--prev">{{ __('[:en]Previous[:id]Sebelumnya[:]') }}</button>
									<button
										class="slider-tutorial--prev-next slider-tutorial--next">{{ __('[:en]Next[:id]Selanjutnya[:]') }}</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal-quiz" id="quizAuthor" tabindex="-1" role="dialog" aria-labelledby="quizAuthorLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-body quiz-content">
					<div class="container">
						<div class="row row-header">
							<div class="col-md-12">
								<p class="text-left">
									<a class="navbar-brand" href="{{site.url}}">
										<img width="150" src="{{function('get_template_directory_uri')}}/images/uph.svg"
											alt="{{site.name}}">
									</a>
								</p>
							</div>
						</div>
						<div class="row row-content">
							<div class="col-md-6 d-flex column-header">
								<h3 class="title mb-4">{{ __('[:en]Before You Start[:id]Sebelum Kamu Mulai[:]') }}</h3>
							</div>
							<div class="col-md-5 align-content-center  column-card-wrapper">
																<div class="form-author">
									<div class="card m-auto border-0 bg-white">
										<div class="card-body mb-4">
											<div class="form-group form-group-quiz">
												<input type="text" class="form-control form-control-quiz" id="tempAuthorName"
													placeholder=" " required>
												<label
													for="tempAuthorName">{{ __('[:en]Name[:id]Nama[:]') }}</label>
											</div>
											<div class="form-group form-group-quiz">
												<input type="tel" class="form-control form-control-quiz" id="tempAuthorPhone"
													placeholder=" " required>
												<label
													for="tempAuthorPhone">{{ __('[:en]Phone Number[:id]No. Telepon[:]') }}</label>
											</div>
											<div class="form-group form-group-quiz">
												<input type="email" class="form-control form-control-quiz" id="tempAuthorEmail"
													placeholder=" " required>
												<label
													for="tempAuthorEmail">Email</label>
											</div>
											<div class="form-group form-group-quiz">
												<input type="text" class="form-control form-control-quiz" id="tempAuthorClass"
													placeholder=" " required>
												<label
													for="tempAuthorClass">{{ __('[:en]Grade[:id]Kelas[:]') }}</label>
											</div>
											<div class="form-group form-group-quiz">
												<input type="text" class="form-control form-control-quiz" id="tempAuthorSchool"
													placeholder=" " required>
												<label
													for="tempAuthorSchool">{{ __('[:en]School[:id]Sekolah[:]') }}</label>
											</div>
                      <div class="form-group form-group-quiz">
										<select id="tempAuthorMajorInterest" name="tempAuthorMajorInterest" class="form-control form-control-quiz">
											<option class="invalid" value="" disabled selected hidden>Jurusan yang diminati</option>
											<option class="opt" value="Accounting">Accounting</option>
											<option class="opt" value="Accounting (International Class)">Accounting (International Class)</option>
											<option class="opt" value="Applied Mathematics">Applied Mathematics</option>
											<option class="opt" value="Architecture">Architecture</option>
											<option class="opt" value="Biotechnology">Biotechnology</option>
											<option class="opt" value="Civil Engineering">Civil Engineering</option>
											<option class="opt" value="Communications">Communications</option>
											<option class="opt" value="Dentistry">Dentistry</option>
											<option class="opt" value="DIV Laboratorium Teknologi Medis">DIV Laboratorium Teknologi Medis</option>
											<option class="opt" value="Electrical Engineering">Electrical Engineering</option>
											<option class="opt" value="Food Technology">Food Technology</option>
											<option class="opt" value="Hospitality Management">Hospitality Management</option>
											<option class="opt" value="Industrial Engineering">Industrial Engineering</option>
											<option class="opt" value="Informatics">Informatics</option>
											<option class="opt" value="Information Systems">Information Systems</option>
											<option class="opt" value="Interior Design">Interior Design</option>
											<option class="opt" value="International Relations">International Relations</option>
											<option class="opt" value="International Teachers College">International Teachers College</option>
											<option class="opt" value="Law">Law</option>
											<option class="opt" value="Law (International Class)">Law (International Class)</option>
											<option class="opt" value="Management">Management</option>
											<option class="opt" value="Management (International Class)">Management (International Class)</option>
											<option class="opt" value="Medicine">Medicine</option>
											<option class="opt" value="Music">Music</option>
											<option class="opt" value="Nursing (International Class)">Nursing (International Class)</option>
											<option class="opt" value="Pharmacy">Pharmacy</option>
											<option class="opt" value="Pharmacy (D3)">Pharmacy (D3)</option>
											<option class="opt" value="Product Design">Product Design</option>
											<option class="opt" value="Psychology">Psychology</option>
											<option class="opt" value="Tourism">Tourism</option>
											<option class="opt" value="Visual Communication Design">Visual Communication Design</option>
										</select>
										<label
											for="tempAuthorMajorInterest">{{ __('[:en]Major Interest[:id]Jurusan yang diminati[:]') }}</label>
									</div>
										</div>
									</div>
									<br>
									<p class="text-center text-uppercase">
										<a href="#"
											class="btn btn-sm btn-uph btn-uph__plain-blue btn-uph__click-effect btn-cta-widget"
											id="btn-show-questions">{{ __('[:en]Start Quiz[:id]Mulai Kuis[:]') }}</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal-quiz" id="quizQuestions" tabindex="-1" role="dialog" aria-labelledby="quizQuestionsLabel"
		aria-hidden="true">
		<div id="quizForm" class="modal-dialog modal-dialog-scrollable">
			<div id="" class="theme-bg bg-blue is-active" style="opacity: 1">
			</div>
			<div id="" class="theme-bg bg-pink">
			</div>
			<div class="modal-content">
				<div class="modal-body quiz-content">
					<div class="container">
						<div class="row row-header">
							<div class="col-md-12">
								<p class="text-left">
									<a class="navbar-brand" href="{{site.url}}">
										<img width="150"
											src="{{function('get_template_directory_uri')}}/images/uph-logo@3x.png"
											alt="{{site.name}}">
									</a>
								</p>
							</div>
						</div>
						<div class="row row-content">
							<div class="col-md-6 col-xl-5 offset-xl-1 d-flex question-title-wrapper">
								<div class="title-theme title-theme__blue" style="display: block;">
									<h3 class="title question-title mb-4">{{ __('[:en]Section 1[:id]Sesi 1[:]') }}</h3>
									<p class="description">{{ __('[:en]In this test section, you are required to compare between 2 answers on the top and bottom. Choose one that mostly reflects yourself.[:id]Pada sesi tes ini, anda diminta untuk membandingkan 2 jawaban pada baris atas &amp; bawah. Pilih satu jawaban yang paling menggambarkan diri anda.[:]') }}</p>
								</div>

								<div class="title-theme title-theme__pink">
									<h3 class="title question-title mb-4">{{ __('[:en]Section 2[:id]Sesi 2[:]') }}</h3>
									<p class="description">{{ __('[:en]In this test section, you are required to choose one statement that reflects you the most.[:id]Pada sesi tes ini, anda diminta untuk memilih 1 pernyataan yang paling menggambarkan diri anda.[:]') }}</p>
								</div>
							</div>
							<div class="col-md-5 cards-wrapper">
								<div class="cards" id="question-card-wrappers">
									{# questions akan disimpan di sini #}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="progress-wrapper">
									<p class="text-center">{{ __('[:en]Question[:id]Pertanyaannya[:]') }} <span id="quizCurrent">1</span> {{ __('[:en]from[:id]dari[:]') }} <span
											id="quizLength">20</span>
									</p>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="1"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<br>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal modal-quiz" id="quizResult" tabindex="-1" role="dialog" aria-labelledby="quizResultLabel"
		aria-hidden="true">
		<div id="" class="modal-dialog modal-dialog-scrollable">
			<div id="" class="theme-bg bg-blue is-active" style="opacity: 1">
			</div>
			<div class="modal-content">
				<div class="modal-body quiz-content">
					<div class="container">
						<div class="row row-header">
							<div class="col-md-12">
								<p class="text-left">
									<a class="navbar-brand" href="{{site.url}}">
										<img width="150"
											src="{{function('get_template_directory_uri')}}/images/uph-logo@3x.png"
											alt="{{site.name}}">
									</a>
								</p>
							</div>
						</div>
						<div class="row row-content">
							<div class="col-md-12">
								{# result akan ada di sini #}

								<div class="result-container">
									<h4 class="text-white mb-4 result-title">{{ __('[:en]The Result[:id]Hasilnya adalah[:]') }}</h4>

									<div class="result-inner">
										<div class="row">
											<div class="col-md-6 text-center">
												<div class="chart-outer">
													<div class="chart-wrapper" id="chart-wrapper">


													</div>
													<div class="" id="chart-percentage">
														<span id="percentage-number"></span>
														<span class="percentage-decoration">%</span>
													</div>

													<div class="mobile-instruction">{{ __('[:en]Click here[:id]Klik di sini[:]') }}</div>
												</div>
											</div>
											<div class="col-md-6">


												<div class="accordion accordion-result-detail" id="accordionResultDetails">


												</div>
											</div>
										</div>
									</div>

									<p class="btn-cta-container text-center"><a href="{{site.url}}/study-at-uph" id="btn-done"
											class="btn btn-sm btn-uph btn-uph__plain-blue btn-uph__click-effect btn-cta-widget text-uppercase mb-4">{{ __('[:en]See our Study Program[:id]Lihat program studi kami[:]') }}</a>
									</p>

								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{% endblock %}

{% block pagejs %}
<script>

	var quizJson = [
		{
			"questions": [
				{
				  "options":
					[
					  "<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-experimenter.png);'></div><h3 class='card-title h5'>Experimenter</h3><p class='card-text'>({{ __('[:en]Interested in doing experiment, especially in the topic of natural sciences[:id]Suka ber-eksperimen, terlebih pada ilmu alam[:]') }})</p>",
					  "<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-practical.png);'></div><h3 class='card-title h5'>Practical</h3><p class='card-text'>({{ __('[:en]Preferring a practical job[:id]Menyukai pekerjaan yang praktikal[:]') }})</p>"
					],
				  "values":
					[
					  "investigative",
					  "realistic"
					],
				  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-empathy.png);'></div><h3 class='card-title h5'>Empathy</h3><p class='card-text'>({{ __('[:en]Easy to share the pain of others[:id]Mudah ikut merasakan penderitaan orang lain[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-orderly.png);'></div><h3 class='card-title h5'>Orderly</h3><p class='card-text'>({{ __('[:en]Well-organized[:id]Teratur, Rapih, Tertata[:]') }})</p>"
					  ],
					"values":
					  [
						"social",
						"conventional"
					  ],
					  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-expressive.png);'></div><h3 class='card-title h5'>Expressive</h3><p class='card-text'>({{ __('[:en]Easy to express feelings into an artwork[:id]Mudah mengapresiasikan perasaan ke dalam sebuah karya seni[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-altruism.png);'></div><h3 class='card-title h5'>Altruism</h3><p class='card-text'>({{ __('[:en]Giving help sincerely[:id]Memberi pertolongan dengan tulus dan ikhlas[:]') }})</p>"
					  ],
					"values":
					  [
						"artistic",
						"social"
					  ],
					  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-trustworthy.png);'></div><h3 class='card-title h5'>Trustworthy</h3><p class='card-text'>({{ __('[:en]A trustworthy figure/friend to share stories with[:id]Jadi figur yang dipercaya/teman cerita[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-passionate.png);'></div><h3 class='card-title h5'>Passionate</h3><p class='card-text'>({{ __('[:en]Energetic, enthusiastic, and ambitious[:id]Energik, bersemangat, dan berambisi[:]') }})</p>"
					  ],
					"values":
					  [
						"social",
						"enterprise"
					  ],
					  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-persuader.png);'></div><h3 class='card-title h5'>Persuader</h3><p class='card-text'>({{ __('[:en]Able to persuade others to agree with my perspective[:id]Membujuk orang lain untuk mengikuti pandangan pribadi saya[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-detailed.png);'></div><h3 class='card-title h5'>Detailed</h3><p class='card-text'>({{ __('[:en]Thorough in doing everything[:id]Terperinci dalam mengerjakan segala sesuatu[:]') }})</p>"
					  ],
					"values":
					  [
						"enterprise",
						"conventional"
					  ],
					  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-solid.png);'></div><h3 class='card-title h5'>Solid</h3><p class='card-text'>({{ __('[:en]Tough, strong at work and skilful in handling personal tools[:id]Tangguh, kuat dalam bekerja dan baik dalam mengurus perkakas pribadi[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-creator.png);'></div><h3 class='card-title h5'>Creator</h3><p class='card-text'>({{ __('[:en]Creative, especially in ideas &amp; arts[:id]Suka ber-kreasi, terlebih pada ide &amp; kesenian[:]') }})</p>"
					  ],
					"values":
					  [
						"realistic",
						"artistic"
					  ],
					  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-imaginative.png);'></div><h3 class='card-title h5'>Imaginative</h3><p class='card-text'>({{ __('[:en]Love to imagine abstract things so that it becomes interesting[:id]Suka membayangkan hal-hal yang abstrak sehingga menjadi menarik[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-negotiator.png);'></div><h3 class='card-title h5'>Negotiator</h3><p class='card-text'>({{ __('[:en]Love to discuss, negotiate, and conquer[:id]Suka berdiskusi, negosiasi dan menaklukkan[:]') }})</p>"
					  ],
					"values":
					  [
						"artistic",
						"enterprise"
					  ],
					  "theme": "blue"
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-logic.png);'></div><h3 class='card-title h5'>Logic</h3><p class='card-text'>({{ __('[:en]Think things that are in clear &amp; have a conclusive meaning[:id]Memikirkan hal-hal yang beralur jelas &amp; memiliki arti yang dapat disimpulkan[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-caring.png);'></div><h3 class='card-title h5'>Caring</h3><p class='card-text'>({{ __('[:en]Have a great concern toward others[:id]Memiliki tingkat kepedulian tinggi terhadap orang lain[:]') }})</p>"
					  ],
					"values":
					  [
						"investigative",
						"social"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-natural.png);'></div><h3 class='card-title h5'>Natural</h3><p class='card-text'>({{ __('[:en]Very interested in Mathematics &amp; Natural Sciences[:id]Sangat suka dengan pelajaran MIPA[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-artistic.png);'></div><h3 class='card-title h5'>Artistic</h3><p class='card-text'>({{ __('[:en]Have a high level of appreciation[:id]Memiliki rasa apresiasi yang tinggi[:]') }})</p>"
					  ],
					"values":
					  [
						"investigative",
						"artistic"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-service-oriented.png);'></div><h3 class='card-title h5'>Service Oriented</h3><p class='card-text'>({{ __('[:en]Love to serve others[:id]Suka melayani orang lain[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-mechanical.png);'></div><h3 class='card-title h5'>Mechanical</h3><p class='card-text'>({{ __('[:en]Able to work skilfully with tools/machines[:id]Baik/mampu melakukan pekerjaan dengan benda mekanik/mesin[:]') }})</p>"
					  ],
					"values":
					  [
						"social",
						"realistic"
					  ],
					  "theme": "blue"
	  
				},
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-scholarly.png);'></div><h3 class='card-title h5'>Scholarly</h3><p class='card-text'>({{ __('[:en]Oriented to new discoveries from research[:id]Berorientasi pada penemuan baru dari penelitian dan riset[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-energizer.png);'></div><h3 class='card-title h5'>Energizer</h3><p class='card-text'>({{ __('[:en]Leading passionately[:id]Bersemangat memimpin/jadi yang terdepan[:]') }})</p>"
					  ],
					"values":
					  [
						"investigative",
						"enterprise"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-original.png);'></div><h3 class='card-title h5'>Original</h3><p class='card-text'>({{ __('[:en]Always have new, original ideas[:id]Selalu memiliki ide-ide yang original/baru[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-precise.png);'></div><h3 class='card-title h5'>Precise</h3><p class='card-text'>({{ __('[:en]Thorough in numbers and words[:id]Teliti dalam angka dan kata-kata[:]') }})</p>"
					  ],
					"values":
					  [
						"artistic",
						"conventional"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-influencer.png);'></div><h3 class='card-title h5'>Influencer</h3><p class='card-text'>({{ __('[:en]Easy to influence the people around[:id]Mudah mempengaruhi orang di sekitar[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-builder.png);'></div><h3 class='card-title h5'>Builder</h3><p class='card-text'>({{ __('[:en]Like the concept or construction of a building or machine[:id]Menyukai konsep bangun-membangun/konstruksi bangunan dan mesin[:]') }})</p>"
					  ],
					"values":
					  [
						"enterprise",
						"realistic"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-arithmethic.png);'></div><h3 class='card-title h5'>Arithmethic</h3><p class='card-text'>({{ __('[:en]Love arithmetic[:id]Menyukai hitungan aritmatika[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-normative.png);'></div><h3 class='card-title h5'>Normative</h3><p class='card-text'>({{ __('[:en]Have a normative standard in working, often pressumed as a perfectionist[:id]Memiliki standar yang baku dalam bekerja, kerap disangka perfeksionis[:]') }})</p>"
					  ],
					"values":
					  [
						"investigative",
						"conventional"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-planner.png);'></div><h3 class='card-title h5'>Planner</h3><p class='card-text'>({{ __('[:en]Comply to regulation &amp; planning[:id]Sangat tertib pada peraturan &amp; perencanaan[:]') }})</p>",
						"<div class='card-icon' style='background-image: url(../wp-content/themes/uph/images/quiz/icon-outdoor.png);'></div><h3 class='card-title h5'>Outdoor</h3><p class='card-text'>({{ __('[:en]Likes jobs that are dynamic, camping, home renovation / repairing motorbikes &amp; cars[:id]Menyukai pekerjaan yang dinamis, berkemah, renovasi rumah / memperbaiki motor &amp; mobil[:]') }})</p>"
					  ],
					"values":
					  [
						"conventional",
						"realistic"
					  ],
					  "theme": "blue"
				  },
				{
					"options":
					  [
						"{{ __('[:en]Able to repair stuff[:id]Mampu memperbaiki benda-benda[:]') }}",
						"{{ __('[:en]Enthusiastic in scientific matters[:id]Antusias dengan hal-hal berbau sains[:]') }}",
						"{{ __('[:en]Always coming up with new ideas[:id]Selalu memiliki ide-ide baru[:]') }}",
						"{{ __('[:en]Warm dan close to many people[:id]Hangat dan dekat dengan banyak orang[:]') }}",
						"{{ __('[:en]Often being dominant in a group conversation[:id]Seringkali menguasai pembicaraan dalam grup[:]') }}",
						"{{ __('[:en]Very timely[:id]Sangat tepat waktu[:]') }}"
					  ],
					"values":
					  [
						"realistic",
						"investigative",
						"artistic",
						"social",
						"enterprise",
						"conventional"
					  ],
					  "theme": "pink"
				  },
				{
					"options":
					  [
						"{{ __('[:en]Automotive modification or room renovation[:id]Memodifikasi mobil, motor, atau renovasi kamar[:]') }}",
						"{{ __('[:en]Studying, playing board games or brain teaser[:id]Belajar, bermain board games atau kuis asah otak[:]') }}",
						"{{ __('[:en]Creative in terms of art such as music, crafts, etc.[:id]Berkreasi dalam hal seni seperti musik, kerajinan, dll.[:]') }}",
						"{{ __('[:en]Take part in social/charitable activities[:id]Mengikuti kegiatan sosial atau amal[:]') }}",
						"{{ __('[:en]Persuading friends for adventure (mountain climbing, surfing with high waves)[:id]Mengajak teman untuk berpetualang (mendaki gunung, selancar dengan ombak tinggi)[:]') }}",
						"{{ __('[:en]Very timely[:id]Sangat tepat waktu[:]') }}"
					  ],
					"values":
					  [
						"realistic",
						"investigative",
						"artistic",
						"social",
						"enterprise",
						"conventional"
					  ],
					  "theme": "pink"
				  },
				{
					"options":
					  [
						"{{ __('[:en]Interested in realistic things[:id]Suka dengan hal-hal realistis[:]') }}",
						"{{ __('[:en]Digging, searching, and researching scientific-related things[:id]Menggali, mencari, dan meneliti hal yang berbau sains[:]') }}",
						"{{ __('[:en]Artistic and have lots of ideas[:id]Artistik dan memiliki banyak ide[:]') }}",
						"{{ __('[:en]A Helper, a good listener[:id]Penolong, pendengar yang baik[:]') }}",
						"{{ __('[:en]Easy to convince others of my opinion[:id]Mudah meyakinkan orang lain atas pendapat saya[:]') }}",
						"{{ __('[:en]Diligent, on time, neat[:id]Rajin, tepat waktu, rapih[:]') }}"
					  ],
					"values":
					  [
						"realistic",
						"investigative",
						"artistic",
						"social",
						"enterprise",
						"conventional"
					  ],
					  "theme": "pink"
				  },
				{
					"options":
					  [
						"{{ __('[:en]Inanimate object: stuff, machine, tools[:id]Barang, mesin, perkakas / benda mati[:]') }}",
						"{{ __('[:en]Living thing: Human, society, community[:id]Manusia, pihak, kelompok / benda hidup[:]') }}"
					  ],
					"values":
					  [
						"all",
						"all"
					  ],
					  "theme": "pink"
				  },
				{
					"options":
					  [
						"{{ __('[:en]See any technical error and immediately fixes them[:id]Melihat kesalahan teknis yang ada dan langsung memperbaikinya[:]') }}",
						"{{ __('[:en]Makes answers that can explain the causes of problem systematically[:id]Membuat jawaban-jawaban yang dapat menjelaskan sebab-akibat masalah dengan sistematis[:]') }}",
						"{{ __('[:en]Think of as many unique ideas as possible[:id]Memikirkan kemungkinan-kemungkinan ide pemecahan masalah sebanyak dan seunik mungkin[:]') }}",
						"{{ __('[:en]Strive for harmony and solution that benefit both parties[:id]Mengusahakan keharmonisan dan solusi yang menguntungkan kedua belah pihak[:]') }}",
						"{{ __('[:en]Face challenges by conquering the other party[:id]Menghadapi tantangan dengan menaklukan pihak lain[:]') }}",
						"{{ __('[:en]Solve problems with applicable regulations and standards[:id]Memecahkan masalah dengan peraturan dan standar yang berlaku[:]') }}"
					  ],
					"values":
					  [
						"realistic",
						"investigative",
						"artistic",
						"social",
						"enterprise",
						"conventional"
					  ],
					  "theme": "pink"
				  }
			]
		},
		{
			"answers": [
			  {
				  "title": "Realistic",
				  "description": "{{ __('[:en]People with a good realistic score tend to like jobs that are physical, especially those that are related to objects or tools. On the extreme side (high score), these people prefers a more detailed tool such as machine and construction tool. Realistic people usually prefer to work with objects rather than ideas and other people. Staying in a room will make realistic people bored and stressed. Realistic people are individuals that prefer jobs that demand activity and mobility. The words that best describe realistic people are concrete, practical, and real.[:id]Orang-orang dengan skor realistic yang tinggi akan cenderung menyukai pekerjaan menggunakan anggota tubuh fisik mereka, terlebih apabila terkait dengan benda atau perkakas. Pada titik ekstrim (skor tinggi), orang-orang tersebut akan menyukai perkakas yang lebih detil seperti mesin dan alat konstruksi. Tipe realistic juga biasanya akan lebih menyukai bekerja dengan benda daripada ide-ide gagasan dan hubungan antar manusia. Berdiam di sebuah ruangan akan membuat orang tipe realistic bosan dan tetekan. Orang tipe realistic adalah pribadi yang menyukai pekerjaan yang menuntut keaktifan dan mobilitas. Kata-kata yang paling tepat mendeskripsikan orang tipe realistic adalah <strong><em>konkret</em></strong>, <strong><em>praktis</em></strong>, dan <strong><em>nyata</em></strong>.[:]') }}",
				  "job": "{{ __('[:en]Industrial Engineering, Civil Engineering, Electrical Engineering, Dentistry, Architect, Medical Science/Doctor, Software Programmer, Computer Technology, Interior Design, Product Design, Chef.[:id]Insinyur Mesin, Insinyur Pembangunan, Insinyur Kelistrikan, Kedokteran Gigi, Arsitektur, Kedokteran, Progamer Perangkat Lunak, Teknisi Komputer, Desainer Produk, Juru Masak.[:]') }}",
				  "slug": "realistic"
			  },
			  {
				  "title": "Investigative",
				  "description": "{{ __('[:en]People with a good investigative score tend to like jobs that involve logic and analysis, especially if they stimulate curiosity because of complex problems. On the extreme side (high score), these people are drawn to science a bit too much (Science Geek). Investigative people usually prefer ideas, research, and proof of fact. Conversations and crowds of people will usually be avoided. Investigative people are those who like jobs that demand an active thinking and analysis. The words that best describe an investigative person are visionary, logical and scientific.[:id]Orang-orang dengan skor investigative yang tinggi akan cenderung menyukai pekerjaan yang mellibatkan logika dan analisa, terlebih apabila memberikan rasa penasaran akan masalah yang kompleks. Pada titik ekstrim (skor tinggi), orang-orang tersebut akan menyukai sains dengan agak berlebihan (Science Geek). Tipe investigative juga biasanya akan lebih menyukai ide-ide, riset, dan pembuktian fakta. Perbincangan dan kerumunan banyak orang biasanya akan dihindari oleh orang tipe investigative. Orang tipe investigative adalah pribadi yang menyukai pekerjaan yang menuntut keaktifan berpikir kritis dan analisa. Kata-kata yang paling tepat mendeskripsikan orang tipe investigative adalah <strong><em>sains</em></strong>, <strong><em>logis</em></strong>, dan <strong><em>visioner</em></strong>.[:]') }}",
				  "job": "{{ __('[:en]Medical Science/Doctor, Biotechnology, Food Technology, Nutritionist, Software Programmer, Computer Technology, Pharmacist, Dentistry, Mathematician, Psychology.[:id]Kedokteran, Bioteknologi, Teknologi Pangan, Ahli Gizi, Programmer Perangkat Lunak, Teknisi Komputer, Farmasi, Kedokteran Gigi, Matematikawan, Psikologi.[:]') }}",
				  "slug": "investigative"
			  },
			  {
				  "title": "Artistic",
				  "description": "{{ __('[:en]People with a high artistic score tend to like jobs that involve feeling and intuition, especially if the work provides freedom and creativity. On the extreme side (high score), these people will be the inventor of brilliant and unusual ideas. Artistic people usually prefer something new, especially in new ideas, just like the artistic types, the difference is that artistic type is more inclined towards beauty and culture. Monotonous work that requires concentration and detailed structure to work will be of great challenge to the artistic type’s free soul. An artistic person is an individual who likes work that demands active and creative thinking. The words that best describe artistic people are idea, expressive, and independent.[:id]Orang-orang dengan skor artistic yang tinggi akan cenderung menyukai pekerjaan yang melibatkan perasaan dan intuisi, terlebih apabila pekerjaan tersebut memberikan kebebasan dan kreativitas. Pada titik ekstrim (skor tinggi), orang-orang tersebut akan menjadi pencetus ide yang brilian dan tidak lazim. Tipe artistic juga biasanya akan lebih menyukai sesuatu yang baru, terlebih pada ide-ide baru seperti tipe artistic, hanya saja tipe artistic lebih condong ke arah keindahan dan kebudayaan. Pekerjaan yang monoton dan menuntut konsentrasi dan struktur bekerja terlalu detil akan sangat menyulitkan jiwa bebas tipe artistic. Orang tipe artistic adalah pribadi yang menyukai pekerjaan yang menuntut keaktifan berpikir kreatif dan dinamis. Kata-kata yang paling tepat mendeskripsikan orang tipe artistic adalah <strong><em>ide</em></strong>, <strong><em>ekspresif</em></strong>, dan <strong><em>independen</em></strong>.[:]') }}",
				  "job": "{{ __('[:en]Musician, Artisan, Graphic Designer, Interior Designer, Product Designer, Architect, Writer, Literature/Poetry, Photographer, Journalist, Chef, Creative Business.[:id]Musisi, pengrajin, Desainer (desain grafis, desain interior, desain produk), Arsitek, Penulis, Sastrawan (Literature/Poetry), Fotografer, Jurnalis, Juru Masak, Bisnis (Creative business).[:]') }}",
				  "slug": "artistic"
			  },
			  {
				  "title": "Social",
				  "description": "{{ __('[:en]People with a good social score tend to like jobs that involve personal interaction, especially if it involves empathy and helps people.On the extreme side (high score), these people will do this kind of job voluntarily. Social people are usually more inclined to deal with human than an object or machine. Conversations and crowds of people will usually be sought after by social people. Social people are individuals who like jobs that seek the welfare of many parties. The words that best describe a social person are love, patience, and feeling.[:id]Orang-orang dengan skor social yang tinggi akan cenderung menyukai pekerjaan melibatkan interaksi personal, terlebih apabila pekerjaan tersebut menyentuh empati dan aksi menolong. Pada titik ekstrim (skor tinggi), orang-orang tersebut akan melakukan pekerjaan ini secara sukarela. Tipe social juga biasanya akan lebih condong untuk berurusan dengan manusia daripada benda atau mesin. Perbincangan dan kerumunan banyak orang biasanya akan dicari oleh orang tipe social. Orang tipe social adalah pribadi yang menyukai pekerjaan yang mengusahakan kesejahteraan banyak pihak. Kata-kata yang paling tepat mendeskripsikan orang tipe social adalah <strong><em>kasih sayang</em></strong>, <strong><em>sabar</em></strong>, dan <strong><em>perasa</em></strong>.[:]') }}",
				  "job": "{{ __('[:en]Nurse, Counselor, Medical Science/Doctor, Teacher, Clergy, Volunteer, Service Industry/Hospitality, Travel Industry, Public Relation.[:id]Perawat, Konselor, Kedokteran, Guru, Pemuka Agama, Relawan, Industri Pelayan, Industri Perjalanan, Komunikasi Publik.[:]') }}",
				  "slug": "social"
			  },
			  {
				  "title": "Enterprise",
				  "description": "{{ __('[:en]People with a good enterprise score tend to like jobs that involve persuasion skill, especially if the work is challenging and must be conquered. On the extreme side (high score), these people are very competitive to competitors on the same level. Like social people, enterprise people are usually more inclined to deal with human than an object or machine. The difference is that enterprise people tend to do activities that lead to discussion and negotiation. Discussions and crowds of people will usually be utilised by enterprise people. An enterprise person is a person who likes challenging jobs and demands a competitive attitude. The words that best describe an enterprise person are intelligent, assertive, and energetic.[:id]Orang-orang dengan skor enterprise yang tinggi akan cenderung menyukai pekerjaan yang melibatkan kemampuan persuasi, terlebih apabila pekerjaan tersebut menantang dan harus ditaklukan. Pada titik ekstrim (skor tinggi), orang-orang tersebut akan sangat kompetitif terhadap pesaing yang sepadan. Tipe enterprise juga biasanya akan lebih condong untuk berurusan dengan manusia daripada benda atau mesin seperti tipe social, bedanya adalah Tipe enterprise lebih cenderung pada kegiatan yang mengarah pada diskusi dan negosiasi. Perbincagan dan kerumunan banyak orang biasanya akan dimanfaakan oleh tipe orang enterprise. Orang tipe enterprise adalah pribadi yang menyukai pekerjaan yang penuh tantangan dan menuntut sikap kompetitif. Kata-kata yang paling tepat mendeskripsikan orang tipe enterprise adalah <strong><em>cerdas</em></strong>, <strong><em>asertif</em></strong>, dan <strong><em>energik</em></strong>.[:]') }}",
				  "job": "{{ __('[:en]Lawyer, Prosecutor, Public Notary, International Relation, Diplomacy, Political Science, Negotiation, Entrepreneurship, Sales, Auctioneer.[:id]Hukum, Hubungan Internasional, Ilmu Politik, Bisnis, Tenaga Penjual, Juru Lelang.[:]') }}",
				  "slug": "enterprise"
			  },
			  {
				  "title": "Conventional",
				  "description": "{{ __('[:en]People with a good conventional score tend to like jobs that require precision and efficiency, especially when it comes to data and furniture. On the extreme side (high score), these people will be very thorough & often suspected as perfectionists. Conventional people usually like clear rules and data accuracy. Staying in a room will make conventional people productive and optimal. Conventional people are individuals who like jobs with concrete objects such as paper archives and computerization. The best words to describe conventional people are method, efficient, and precise.[:id]Orang-orang dengan skor conventional yang tinggi akan cenderung menyukai pekerjaan menuntut ketelitian dan efisiensi, terlebih apabila terkait dengan data dan perabot. Pada titik ekstrim (skor tinggi), orang-orang tersebut akan sangat teliti sehingga kerap disangka perfeksionis. Tipe conventional juga biasanya akan sangat menyukai peraturan yang jelas dan keakuratan data. Berdiam di sebuah ruangan akan membuat orang tipe conventional produktif dan bekerja maksimal. Orang tipe conventional adalah pribadi yang menyukai pekerjaan dengan benda konkret seperti kertas arsip dan komputerisasi. Kata-kata yang paling tepat mendeskripsikan orang tipe conventional adalah <strong><em>metode</em></strong>, <strong><em>efisien</em></strong>, dan <strong><em>tepat</em></strong>.[:]') }}",
				  "job": "{{ __('[:en]Applied Mathematician, Banking and Finance, Accounting, Business Administration, Administrator/Public Administrator, Archivist, Housekeeping Service.[:id]Praktisi Statistika, Perbankan, Akuntansi, Administrasi Bisnis, Sekretariat, Pustakawan, Pembenahan.[:]') }}",
				  "slug": "conventional"
			  }
			]
		}
	];

</script>
{% endblock %}