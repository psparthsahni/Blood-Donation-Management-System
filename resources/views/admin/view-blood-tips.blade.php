@extends('layouts.admin')

@section('content')
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        Beat the Myth
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                 data-parent="#accordion">
                <div class="card-body">
                    Donating blood is safe and simple. It takes approximately 10-15 minutes to complete
                    the blood donation process. Any healthy adult between 18 years and 60 years of age
                    can donate blood. This is what you can expect when you are ready to donate blood :
                    <ul>
                        <li>
                            You walk into a reputed and safe blood donation centre or a mobile camp
                            organized by a reputed institution.
                        </li>
                        <li>
                            A few questions will be asked to determine your health status (general
                            questions on health, donation history etc). Usually you will be asked to
                            fill out a short form.
                        </li>
                        <li>
                            Then a quick physical check will be done to check temperature, blood
                            pressure, pulse and hemoglobin content in blood to ensure you are a healthy
                            donor.
                        </li>
                        <li>
                            If found fit to donate, then you will be asked to lie down on a resting
                            chair or a bed. Your arm will be thoroughly cleaned. Then using sterile
                            equipments blood will be collected in a special plastic bag. Approximately
                            350 ml of blood will be collected in one donation. Those who weigh more than
                            60 Kg can donate 450 ml of blood.
                        </li>
                        <li>
                            Then you must rest and relax for a few minutes with a light snack and
                            something refreshing to drink. Some snacks and juice will be provided.
                        </li>
                        <li>
                            Blood will be separated into components within eight hours of donation.
                        </li>
                        <li>
                            The blood will then be taken to the laboratory for testing.
                        </li>
                        <li>
                            Once found safe, it will be kept in special storage and released when
                            required.
                        </li>
                        <li>
                            The blood is now ready to be taken to the hospital, to save lives.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                        DO donate blood, only if you satisfy all of the following conditions
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                 data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li>
                            You are between age group of 18-60 years.
                        </li>
                        <li>
                            Your weight is 45 kgs or more.
                        </li>
                        <li>
                            Your hemoglobin is 12.5 g/dL minimum.
                        </li>
                        <li>
                            Your last blood donation was 3 or more months earlier.
                        </li>
                        <li>
                            You are healthy and have not suffered from malaria, typhoid or other
                            transmissible disease in the recent past.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                        DO NOT donate blood, if you have any of the following conditions
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                 data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li>
                            Cold / fever in the past 1 week.
                        </li>
                        <li>
                            Under treatment with antibiotics or any other medication.
                        </li>
                        <li>
                            Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy),
                            history of cancer, chronic kidney or liver disease, bleeding tendencies,
                            venereal disease etc.
                        </li>
                        <li>
                            Major surgery in the last 6 months.
                        </li>
                        <li>
                            Vaccination in the last 24 hours.
                        </li>
                        <li>
                            Had a miscarriage in the last 6 months or have been pregnant / lactating in
                            the last one year.
                        </li>
                        <li>
                            Had fainting attacks during last donation.
                        </li>
                        <li>
                            Have regularly received treatment with blood products.
                        </li>
                        <li>
                            Shared a needle to inject drugs/ have history of drug addiction.
                        </li>
                        <li>
                            Had sexual relations with different partners or with a high risk individual.
                        </li>
                        <li>
                            Been tested positive for antibodies to HIV.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-block mt-3" href="{{ route('edit-blood-tips') }}">Edit</a>
@endsection
