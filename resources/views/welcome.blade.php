@extends('layouts.app')

@section('content')
<div class="container">
<div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="jumbotron">
            <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block d-block mx-auto mb-3" style="height: 150px">
            <h3 class="font-weight-bold">Colegio de Dagupan Investiture Registration</h3>
            <p>World Health Organization recommend a practice called contact tracing to help identify those who could potentially have been exposed to COVID-19 and help minimize the spread of the virus</p>
            <p><strong>How does it work?</strong></p>
                <ul>
                <li>Once a person tests positive COVID-19, public health staff work with a patient to help them recall everyone with whom they have had close contact during the timeframe while they may have been contagious.</li>
                <li>Public health staff contact these individuals to let them know they may have been exposed to the virus. For privacy reasons, contacts are not told the identity of the person who tested positive.</li>
                <li>The individuals who may have been exposed are provided with information to understand their risk, symptoms to watch for, and ways to protect others from infection if they begin to feel ill.</li>
                <li>Individuals will be encouraged to stay home and maintain social distance from others for two weeks after their contact with the infected person, in case they get sick. They should monitor themselves by checking their temperature twice daily and watching for cough or shortness of breath.</li>
                <li>Public health staff may check in with the individuals to make sure they are self-monitoring and have not developed symptoms.</li>
                </ul>
            <hr class="my-4">
            <a href="{{ route('tracings.create') }}" type="button" class="btn btn-block btn-primary">Register Here</a>
            </div>
        </div>
    </div>
</div>
@endsection
