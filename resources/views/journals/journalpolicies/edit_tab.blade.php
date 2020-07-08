<div class="col-lg-12 mx-auto">
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link {{ Nav::isRoute('journals.layout.edit') }}" href="{{route('journals.layout.edit',$journalpolicy->id)}}">
            Journal Layout
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Nav::isRoute('journals.papersubmission.edit') }}" href="{{route('journals.papersubmission.edit',$journalpolicy->id)}}">
            Journal PaperSubmission
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Nav::isRoute('journals.paperpublication.edit') }}" href="{{route('journals.paperpublication.edit',$journalpolicy->id)}}">
                Paper Publication
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Nav::isRoute('journals.paymentpolicy.edit') }}" href="{{route('journals.paymentpolicy.edit',$journalpolicy->id)}}">
                Payment Policy
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Nav::isRoute('journals.guidelines.edit') }}" href="{{route('journals.guidelines.edit',$journalpolicy->id)}}">
               Guidelines
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Nav::isRoute('journals.plagiarismpolicy.edit') }}" href="{{route('journals.plagiarismpolicy.edit',$journalpolicy->id)}}">
                Plagiarism
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Nav::isRoute('journals.misconduct.edit') }}" href="{{route('journals.misconduct.edit', $journalpolicy->id)}}">
                Academic Misconduct
            </a>
        </li>
    </ul>
</div>
