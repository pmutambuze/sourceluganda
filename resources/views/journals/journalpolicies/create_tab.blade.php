<div class="col-lg-12 mx-auto">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link {{ Nav::isRoute('journals.layout.create') }}" href="{{route('journals.layout.create')}}">
                    Journal Layout
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ Nav::isRoute('journals.papersubmission.create') }}" href="{{route('journals.papersubmission.create')}}">
                    Journal PaperSubmission
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Nav::isRoute('journals.paperpublication.create') }}" href="{{route('journals.paperpublication.create')}}">
                        Paper Publication
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Nav::isRoute('journals.paymentpolicy.create') }}" href="{{route('journals.paymentpolicy.create')}}">
                        Payment Policy
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Nav::isRoute('journals.guidelines.create') }}" href="{{route('journals.guidelines.create')}}">
                       Guidelines
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Nav::isRoute('journals.plagiarismpolicy.create') }}" href="{{route('journals.plagiarismpolicy.create')}}">
                        Plagiarism
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Nav::isRoute('journals.misconduct.create') }}" href="{{route('journals.misconduct.create')}}">
                        Academic Misconduct
                    </a>
                </li>
            </ul>
        </div>
