@extends('templates.master')


@section('content')
<style>
    /* GLOBAL STYLES
-------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .marketing h2 {
        font-weight: 400;
    }

    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
    }

    /* rtl:end:ignore */


    /* Featurettes
------------------------- */

    .featurette-divider {
        margin: 5rem 0;
        /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        /* rtl:remove */
        letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
        margin-left: 30px;
    }

    .featurette-heading {
        font-size: 50px;
        margin-left: 30px;
    }

    .avatar {
        border-radius: 50%;

    }
</style>
<main>

    <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="https://images.squarespace-cdn.com/content/v1/5c4111e5b98a78c514801cef/1557778195645-9PRB1WOS2UT7T1DM98UE/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/Chappelow+Events+Wedding+Planners.jpg?format=750w" alt="" srcset="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="text-muted">Another example headline.</h1>
                        <p class="text-muted">Some representative placeholder content for the second slide of the carousel.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.squarespace-cdn.com/content/v1/5c4111e5b98a78c514801cef/1557778169971-G591QJKIQ7EL6R7ICOQK/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/chappelow%2Bevents%2B-%2Bevent%2Bplanning%2B.jpg?format=750w" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="text-danger">Another example headline.</h1>
                        <p class="text-white">Some representative placeholder content for the second slide of the carousel.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://images.squarespace-cdn.com/content/v1/5c4111e5b98a78c514801cef/1557778212455-5OAOMC26PH33FBNV83PF/ke17ZwdGBToddI8pDm48kIZKZHacNgSoiqu1dbwcTRV7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UX9Zpskzr6go__FxM_6exhYw5by9iv6QAq9UZG8MSP2t9rqXAfhqx7nqq9zlU6uspg/Chappelow+Events+-+non+profit+work.jpg?format=750w" alt="" srcset="">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1 class="text-danger h3">One more for good measure.</h1>
                        <p class="text-danger">Some representative placeholder content for the third slide of this carousel.</p>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row mb-2">
            <div class="col-lg-12 bg-default h2 text-center ">
                Some event planners near to your location.
            </div>

        </div>
        <div class="row ">

            <div class="col-lg-4" style="max-height: 300px;">
                <img class="avatar" src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg" alt="" srcset="">

                <h2>Event Planner 1</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="{{url('eventplanner')}}">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="max-height: 300px;">
                <img class="avatar" src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg" alt="" srcset="">

                <h2>Event Planner 2</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="max-height: 300px;">
                <img class="avatar" src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt="" srcset="">

                <h2>Event Planner 3</h2>
                <p>And lastly this, the third column of representative placeholder content. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Event Planning + Design <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">A celebration of collaboration. Our partnership starts with an intensive one-on-one consultation to help us understand the vision for your big day or important event. From there, we create a plan customized to your concept. On event day, we’ll manage every last logistic and nosey-guest-question, or hand things off to you or your team depending on needs and budget.</p>
            </div>
            <div class="col-md-5">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Feventmaniacs.nl%2Fwp%2Fwp-content%2Fuploads%2F2020%2F07%2FDutch-Biz-Amersfoort-activiteiten-ballonvaren-500x500-1.jpg&f=1&nofb=1" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Weddings. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Joy to the agenda. We delight in the details of your big day so you can sip, socialize and soak up every second from planning process to processional. Our collaborative approach helps couples create exceptional experiences that are flawless, effortless and tailored to their vision.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Feventmaniacs.nl%2Fwp%2Fwp-content%2Fuploads%2F2020%2F07%2FDutch-Biz-Amersfoort-activiteiten-ballonvaren-500x500-1.jpg&f=1&nofb=1" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 ">
                <h2 class="featurette-heading">Non Profit Events. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Doing good together. Working with nonprofits to amplify their events is part of our passion and a service close to our hearts. We understand the importance of representing your organization’s mission and creating connections with donors that last throughout the year.</p>
            </div>
            <div class="col-md-5 mr-5">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Feventmaniacs.nl%2Fwp%2Fwp-content%2Fuploads%2F2020%2F07%2FDutch-Biz-Amersfoort-activiteiten-ballonvaren-500x500-1.jpg&f=1&nofb=1" alt="">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->



</main>

@endsection