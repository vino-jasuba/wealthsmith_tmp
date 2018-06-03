<div class="span8">
    <div class="subcribe-form">
        <fieldset>
            <form class="subscriptionForm" method="post" action="{{route('subscribe')}}">
                {{csrf_field()}}
                <input id="subscriptionForm" name="subscription_email" class="inputForm" type="email" value="{{old('subscriptionForm')}}" placeholder="Enter Your E-mail"/>
                <input type="submit" id="submitButton" class="transition" value="Send">
            </form>
            @if($errors->any())
                <div id="error">Please enter a valid email address</div>
            @else
                <div id="success">Thanks for your subscription</div>
            @endif
        </fieldset>
    </div>
</div>