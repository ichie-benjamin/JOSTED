@extends('layouts.master-main')

@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Submit Article Online</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Please use the online manuscript submission form below to submit your articles.</p>
                </div>;2
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
        <div class="container">
            <!--    <div class="row">-->
            <!--      <div class="col-lg-12">-->
            <!--        <h3 class="">Send Message</h3>-->
            <!--      </div>-->
            <!--    </div>-->
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">

                    @include('notification')
                    <form action="{{ route('article.store') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="first_name">First Name *:</label>
                            <input value="{{ old('first_name') }}" type="text" name="first_name" class="form-control" placeholder="First Name" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name *:</label>
                            <input value="{{ old('last_name') }}" type="text" name="last_name" class="form-control" placeholder="Last Name" id="last_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Mobile Number :</label>
                            <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" placeholder="Enter phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="country">Country :</label>
                            <input type="text" value="{{ old('country') }}" name="country" class="form-control" placeholder="Country" id="country">
                        </div>
                        <div class="form-group">
                            <label for="state">State :</label>
                            <input type="text" name="state" value="{{ old('state') }}" class="form-control" placeholder="State" id="state">
                        </div>
                        <div class="form-group">
                            <label for="city">City :</label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="City" id="city">
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip / Postal Code :</label>
                            <input type="text" name="zip" value="{{ old('zip') }}" class="form-control" placeholder="Zip" id="zip">
                        </div>

                        <div class="form-group">
                            <label for="title">Article Title :</label>
                            <input type="text" name="article_title" value="{{ old('article_title') }}" class="form-control" placeholder="Article Title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="author">Name of Corresponding Author *</label>
                            <input type="text" value="{{ old('name_of_author') }}"  name="name_of_author" class="form-control" placeholder="Name of Corresponding Author *" id="author">
                        </div>

                        <div class="form-group">
                            <label for="author_2">Author 2 (If any)</label>
                            <input type="text" value="{{ old('author_2') }}" name="author_2" class="form-control" placeholder="Author 2 *" id="author_2">
                        </div>
                        <div class="form-group">
                            <label for="other_authors">Other Authors (If any)</label>
                            <input type="text" value="{{ old('other_authors') }}" name="other_authors" class="form-control" placeholder="Other Authors" id="other_authors">
                        </div>
                        <div class="form-group">
                            <label for="article_type">Type of Article *</label>
                            <select class="form-control" name="article_type" id="article_type">
                                @foreach($types as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="subject_area">Journal / Subject Area (with country) *</label>

                            <select class="form-control" name="subject_area" id="subject_area"><option value="International Journal of Advanced Academic Research - Nigeria">International Journal of Advanced Academic Research - Nigeria</option><option value="African Journal of Sustainable Agricultural Development – Nigeria">African Journal of Sustainable Agricultural Development – Nigeria</option><option value="African Journal of Business and Economic Development – Nigeria">African Journal of Business and Economic Development – Nigeria</option><option value="International Journal of Research in Education and Sustainable Development – Nigeria">International Journal of Research in Education and Sustainable Development – Nigeria</option><option value="Research Journal of Management Practice – Nigeria">Research Journal of Management Practice – Nigeria</option><option value="European Journal of Business and Management">European Journal of Business and Management</option><option value="British Journal of Humanities and Social Sciences">British Journal of Humanities and Social Sciences</option><option value="Journal of Finance and Accounting Research – U.S.A">Journal of Finance and Accounting Research – U.S.A</option><option value="Journal of Tourism and Hospitality – U.S.A">Journal of Tourism and Hospitality – U.S.A</option><option value="Journal of Education – U.S.A">Journal of Education – U.S.A</option><option value="Journal of Humanities and Social Sciences – U.S.A">Journal of Humanities and Social Sciences – U.S.A</option><option value="Journal of Philosophy – U.S.A">Journal of Philosophy – U.S.A</option><option value="Journal of Law – U.S.A">Journal of Law – U.S.A</option><option value="Journal of Civil and Environmental Research – U.S.A">Journal of Civil and Environmental Research – U.S.A</option><option value="Journal of Agriculture – U.S.A">Journal of Agriculture – U.S.A</option><option value="Journal of Computer Engineering and Intelligent Systems – U.S.A">Journal of Computer Engineering and Intelligent Systems – U.S.A</option></select>
                        </div>
                        <div class="form-group">
                            <label>Upload Article * (Allowed file types: .Doc, PDF, .Docx - i.e. MsWord Docs)</label>
                            <input required type="file" class="form-control" name="article" id="file">
                        </div>
                        <div class="form-group">
                            <label>Upload 2nd Article - if any (Allowed file types: .Doc, PDF, .Docx - i.e. MsWord Docs)</label>
                            <input  type="file" class="form-control" name="article_2" id="file">

                        </div>
                        <div class="form-group">
                            <label>Upload 3rd Article - if any (Allowed file types: .Doc, PDF, .Docx - i.e. MsWord Docs)</label>
                            <input  type="file" class="form-control" name="article_3" id="file">
                        </div>

                        <button type="submit" value="send" class="btn btn-primary">SUBMIT</button>

                        <div class="row mt-2">
                            <div class="col-12">
                                <p class="text-muted">
                                    Authors can alternatively send their articles as an email attachment in MsWord format to editor@josted.org, info@josted.org, gts2007students@gmail.com
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5"; style: align="justify"> The Journal of Studies in Education (JOSTED) is an open-access multi-disciplinary peer-reviewed Journal devoted to the publication of original (empirical and theoretical) research papers, critical, up-to-date
                        and concise reviews on all themes related to all aspects of Education...</p>
                    <a href="tel:+8802057843248" class="text-color h5 d-block">+2348101292500, &nbsp;+2348107969220, <br>+2348037202989, &nbsp; +2348037120137,</a>
                    <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">info@josted.org</a>
                    <p> P.M.B 2090, College of Education, Agbor, Delta State, Nigeria.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->
@endsection

