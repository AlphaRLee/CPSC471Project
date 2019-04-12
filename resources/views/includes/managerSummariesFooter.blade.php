<div class="fixed-bottom text-right" style="background-color: darkgray; padding: 10px; padding-right: 5%">
    <button id="cancelReportBtn" type="button" class="btn btn-light" name="button" style="display: none;" onclick="disableSelectMode()">Cancel</button>
    <button id="createReportBtn" type="button" class="btn btn-primary" name="button" onclick="enableSelectMode()">Create Report</button>
    <button id="submitReportBtn" type="button" class="btn btn-primary" name="button" style="display: none;" onclick="submitReport('{{ url('/summaries/manager') }}', '{{ Auth::user()->employee_ssn }}')">Submit Report</button>
</div>
<meta name="csrf-token" content="{{ Session::token() }}"> 
<script src="{{ url('js/reportGenerator.js') }}"></script>
