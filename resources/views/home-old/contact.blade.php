@extends('home')

@section('content')

<div class="sub-content">
    <div class="container">
        <div class="row">
            <div class="span4">
                <h4>Contact info</h4>
                <div class="map">
                    <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
                <address>
                    <strong class="clr">
                        The Company Name Inc.
                        <br>8901 Marmora Road,
                        <br>Glasgow, D04 89GR.
                    </strong>
                    <br>
                    <span>Freephone:</span>+1 800 559 6580
                    <br>
                    <span>Telephone:</span>+1 800 603 6035
                    <br>
                    <span>FAX:</span>+1 800 889 9898
                    <br> E-mail: <a href="#"><u>mail@demolink.org</u></a>
                </address>
            </div>
            <div class="span6">
                <h4>Get in touch</h4>
                <div class="contact-form">
                    <form id="contact-form">
                        <div class="success">Contact form submitted!<strong><br>We will be in touch soon.</strong> </div>
                        <fieldset>
                            <label class="name">
                                <input type="text" value="Name:">
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>
                            </label>
                            <label class="email">
                                <input type="email" value="E-mail:">
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>
                            </label>
                            <label class="phone">
                                <input type="text" value="Phone:">
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
                            </label>
                            <label class="message">
                                <textarea>Message:</textarea>
                                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
                            </label>
                        </fieldset>
                        <div class="pull-right">
                            <a href="#" class="btn btn_ btn-small_" data-type="reset">clear</a>
                            <a href="#" class="btn btn_ btn-small_" data-type="submit">submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
