@extends('layouts.app')

@section('title', 'ARAMCO WPR')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Project Detail Section START -->
    <div class="section-block" dir="ltr" style="text-align: left">
        <div class="container">
            <div class="project-single">
                <div class="project-single-img">
                    <img loading="lazy" src="{{ asset('web/img/aramco.png') }}" class="rounded-border" alt="ARAMCO">
                </div>

                <div class="project-single-text project-single-text-aramco">
                    <div class="row">
                        <!-- Left Side Start -->
                        <div class="col-md-7 col-sm-7 col-12">
                            <h4>Purpose according to Saudi Aramco's GI</h4>
                            <p style="text-align: justify">Work permit receivers and designated representatives shall have
                                sufficient knowledge and
                                experience, be capable of recognizing hazards and be competent in the requirements of this
                                instruction. <br />
                                Work permit receivers shall attend and pass the classroom work permit certification course
                                every two years to maintain certification. Work permit receivers shall complete all required
                                prerequisite training and certifications.
                            </p><br />
                            <h4>To whom is this course?</h4>
                            <p style="text-align: justify">Work permits shall be issued to personnel who works in
                                (<u>Operations</u>, <u>Maintenance</u>, or
                                <u>Contractors</u>) for all work activities not classified as low risk in restricted areas,
                                and for
                                all restricted activities per the proponent organization’s local work permit process and
                                this instruction.
                            </p>
                            <h4>Course Topics/Chapters</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i><b>First & Second Day:</b> Hazards Recognition and
                                    Control.
                                </li>
                                <li><i class="fa fa-check-square-o"></i><b>Third Day:</b> Confined Space Entry.</li>
                                <li><i class="fa fa-check-square-o"></i><b>Fourth Day:</b> Lock Out/ Tag Out.
                                    + <b style="color: brown"><u>Final Exam.</u></b>
                                </li>
                                <li><i class="fa fa-check-square-o"></i>Consultant pharmacist Creative consultant.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-5 col-sm-5 col-12">
                            <h4>Course Information</h4>
                            <div class="project-single-info project-single-info-aramco">
                                <ul>
                                    <li><i style="font-weight: 500">TVTC #:</i> 211616438</li>
                                    <li><i style="font-weight: 500">Audience:</i>Operations,Maintenance,Contractors</li>
                                    <li><i style="font-weight: 500">Duration:</i> 4 Days</li>
                                    <li><i style="font-weight: 500">Certificates:</i>Yes, after passing the Exam</li>
                                    <li><i style="font-weight: 500">Language:</i>Only English</li>
                                    <li><i style="font-weight: 500">Tags:</i> Recognition, Confined Spaces, LOTO</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Download Button START -->
                    <a href="{{ route('WPRRegistrationDownload') }}">
                        <div class="download-file-button download-file-button-aramco clearfix">
                            <h5>Download the Registration Form <span>(.docx)</span>
                            </h5>
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                    </a>
                    <!-- Download Button END -->
                    <br />

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <h4>Registration requirements</h4>
                            <ul>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>A copy of a valid
                                    National ID/Iqama for at least 1
                                    month.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Fill in and sign the
                                    Registration form and resend
                                    again to <a
                                        href="mailto:sales1@althiga.net?subject=Registration%20request%20in%20Aramco%20WPR%20course"
                                        style="color:blue; text-decoration: underline;">sales1@althiga.net</a> Entitled
                                    <b>“Registration request in Aramco WPR course”</b>.
                                </li>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>A Photograph colored for
                                    each participant to be
                                    4x6cm size.</li>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i><u>The fees shall be
                                        paid at maximum 7 days before
                                        the course start date and the priority is for whom pays first. Fees can be paid by
                                        any of the following:</u>
                                    <ul>
                                        <li style="text-align: justify"><i
                                                class="fas fa-dot-circle"></i><b>Wire-Transfer</b> to our bank account, to
                                            send the payment receipt attached
                                            with the registration form.</li>
                                        <li style="text-align: justify"><i class="fa fa-dot-circle"></i><b>Cash</b> in our
                                            location.</li>
                                        <li style="text-align: justify"><i class="fa fa-dot-circle"></i><b>Money Check</b>
                                            for <i><b>"Althiga
                                                    Alfaizh
                                                    Training Institute"</b></i> and to deliver the original in our
                                            location.
                                        </li>
                                    </ul>
                                </li>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Above-mentioned items of
                                    the Registration
                                    requirements are requested in advance prior the course start date.</li>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Participants shall have
                                    above moderate level of
                                    English Language.</li>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Maximum number of
                                    trainees per course is 14 persons
                                    according to Aramco policies and standards.</li>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>The course can ONLY be
                                    conducted in Jeddah at the HQ
                                    of Althiga Training Institute. As per Aramco policies and standards.</li>
                            </ul>
                        </div>
                    </div>

                    <br />
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <h4>WPR Pre-Requisite Course and Institute Policy</h4>
                            <ul>
                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Course fees is 100%
                                    refundable ONLY in case of
                                    cancellation request is sent by an official email and received by Althiga personnel
                                    SEVEN (7) days prior to course start date.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>The client has the right
                                    to replace a participant
                                    with another, ONLY by submitting a change request by an official email TWO (2) days
                                    prior the course start date.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i><u>Failure to attend the
                                        course without a prior
                                        written official email notice (in regards to cancelation policy #1), the fees will
                                        NOT be refundable.</u>
                                </li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>In the event of
                                    insufficient enrolment, Althiga
                                    reserves the right to cancel/reschedule the course 5 days prior to course date, in which
                                    case course fees shall be 100% refundable. In such case, Althiga will NOT be liable for
                                    any other expenses incurred by course participants, i.e. airfare or hotel charges.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Absence is NOT allowed
                                    during all course days, and
                                    in case of any absence, the registered candidate will NOT be issued a Certificate and
                                    will have to re-register as new trainee in new upcoming course.</li>

                                <li style="text-align: justify"><i
                                        class="fa fa-check-square-o"></i>Mobiles/Cell-Phones/Cameras or any mean of
                                    recording
                                    and communication devices are all NOT ALLOWED during all course sessions.</li>

                                <li style="text-align: justify"><i
                                        class="fa fa-check-square-o"></i>Mobiles/Cell-Phones/Cameras or any mean of
                                    recording
                                    and communication devices are totally FORBIDEN in the Quizzes Computer Lab, and in case
                                    of any found used will be considered as CHEATING and involved candidate will NOT be
                                    issued a Certificate and will be excluded from attending any further WPR courses at
                                    Althiga.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>If candidate fail to
                                    reach the passing mark of the
                                    final test, he has to attend a 2nd attempt to Retest, for not later than ONE (1) month
                                    after paying the Retest fees: <b>250.00 SR. (Only Two Hundred and Fifty Saudi
                                        Riyal)</b>.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>If candidate do not pass
                                    the test second attempt, he
                                    HAVE to re-register himself as new trainee in new upcoming course.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>All Tests/Quizzes/Exams
                                    Shall be conducted in
                                    computer lab approved by Aramco standards using desktops PCs, and all tests correction
                                    is 100% automated.</li>

                                <li style="text-align: justify"><i class="fa fa-check-square-o"></i>Althiga reserves the
                                    right to exclude (a)
                                    participant(s) from attending any course due to disorderly conduct, failure to observe
                                    any of Althiga’s rules or above-mentioned policies of participation or failure to attend
                                    the full course. No refund of fees shall be paid to the participant or his employer in
                                    such circumstances.</li>
                            </ul>
                        </div>
                    </div>

                    <br />
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <h4>Copyright / Intellectual Property Rights</h4>
                            <p style="text-align: justify">The copyright and all other intellectual property rights related
                                to WPR Pre-Requisite course
                                documentation, and any other training materials, tools and software provided to the course
                                participants, are solely owned by and hereby reserved to Althiga. Under no circumstances may
                                the whole or any part of the course documentation be produced or copied in any form or by
                                any means or translated into another language without the prior written permission of Al
                                Thiga. Training materials are defined to also include all electronic knowledge products or
                                learning systems, which have been given to the participant on a storage device or made
                                accessible via the Internet. Offenders are liable for payment of damages.</p>
                        </div>
                    </div>

                    <!-- Download Button START -->
                    <a href="{{ route('WPRRegistrationDownload') }}">
                        <div class="download-file-button download-file-button-aramco clearfix">
                            <h5>Download the Registration Form <span>(.docx, .pdf)</span>
                            </h5>
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                    </a>
                    <!-- Download Button END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Project Detail Section END -->

@endsection

@section('footer')
    @parent
@endsection
