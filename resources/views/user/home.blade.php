@extends('base.admin')

@section('title', 'Bosh sahifa')

@section('content_name', 'Bosh sahifa')

@section('main_content')

    <div class="card card-solid ">

        <div class="card-header text-center">
            <h3>{{ __('home.requirements') }}</h3>
        </div>

        <div class="card-body pb-0 row">

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary"><i class="fa fa-check-circle"></i>Maqolalar chop etilish tartibi</h3>
                <p class="text-dark text-justify">
                    Jurnalning 1 ta sonida muallifning faqat 1 ta maqolasi chop etiladi.
                </p>
            </div>

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary"><i class="fa fa-check-circle"></i>Maqola yoziladigan til</h3>
                <p class="text-dark text-justify">
                   Maqolalar o‘zbek, ingliz, rus va barcha turkiy tillarda taqdim etilishi mumkin.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Maqola ma`lumotlarining ilmiy asoslanganligi
                </h3>
                <p class="text-dark text-justify">
                    Maqolada keltirilgan ma’lumot va dalillarning ilmiy asoslanganligi, ishonchli va ko‘chirmachilik holatlari uchun muallif(lar) mas’uldir
                </p>
            </div>

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Ekspertlar tekshiruvi
                </h3>
                <p class="text-dark text-justify">
                    Maqolalar ekspertiza qilinadi. Ekspertlar tomonidan tavsiya etilgan maqolalargina jurnalda chop etiladi.
                       	 Tavsiya etilmagan maqolalar chop etilmaydi va mualliflarga qaytarilmaydi.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Maqolalar chop etilish tartibi
                </h3>
                <p class="text-dark text-justify">
                   Jurnalning 1 ta sonida muallifning faqat 1 ta maqolasi chop etiladi.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Foydalanilgan adabiyotlar ro’yxati
                </h3>
                <p class='fs-14 mb-4'>
                        	Maqola 8-10 sahifa hajmida taqdim etiladi;
                        	Maqolaning tarkibiy tuzilishi:
                        	<ol>
                                <li>	Maqola matni Times News Roman shriftida, 12 kattalikda, chap: 3 sm, o‘ng: 1,5 sm, yuqori va quyi: 2 sm; 1,5 intervalda, A4 shaklida tayyorlanishi lozim.</li>
                                <li>	Maqola sarlavhasi, muallif(lar)ning familiyasi, ismi va otaismi toʻliq holatda katta harflar bilan yozilishi kerak.</li>
                                <li>	Muallif(lar)ning lavozimi, ilmiy unvoni, ish (o‘qish) joylari, respublika, viloyat, telefon raqami, elektron pochta manzili va ORCID raqami to‘liq keltirilishi kerak.</li>
                                <li>	Annotatsiya, maqolaning qisqacha mazmun va ahamiyati, natijalardan iborat bo‘lishi lozim.</li>
                                <li>	Har bir maqola boshida maqola yozilgan tildan tashqari yana 2 tilda (o‘zbek, ingliz, rus va turk tillaridan ixtiyoriy ravishda tanlanadi) annotatsiya bo‘lishi lozim.</li>
                                <li>	Annotatsiya 120-150 so‘zdan ko‘p bo‘lmagan shaklda bo‘lishi kerak.</li>
                                <li>	Annotatsiyaning pastki qismida maqola mazmunini yorituvchi 7-10 ta tayanch so‘zlar keltirilishi kerak.</li>
                            </ol>
                        	Maqola quyidagi shaklda tayyorlanishi kerak:
                        	<ol type='A'>
                                <li> Kirish (Introduction);</li>
                                <li> Asosiy qism (Main part);</li>
                                <li> Natijalar va muhokama (Results and Discussions);</li>
                                <li> Xulosalar (Conclusions);</li>
                                <li> Adabiyotlar (References) – alifbo tartibida keltiriladi;</li>
                                <li> Havola(snoskalar)lar qavsda muallif familiyasi – nashr sanasi – sahifasi (Mo‘minov, 2020: 25) shaklida keltiriladi;</li>
                                <li> Rasm, chizma, jadval, diagrammalar «Rasm» deb arab raqamlari bilan qayd etiladi. Belgi yoki ishoralar – rasm ostida, keyingi qatorda, oʻrtada joylashtiriladi va qoraytirilgan shrift bilan belgilanadi.</li>
                            </ol>
                    </p>
            </div>


        </div>
        <!-- /.card-body -->
    </div>



@endsection
