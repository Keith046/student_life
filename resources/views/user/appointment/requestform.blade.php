@extends('layouts.student')
@section('content')


  <div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/user') }}">Home</a></li>
          
        </ol>
      
   
  </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->
<section class="content">
<div class="content">
      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Appointment</h5></span> 
                
              </div>
              <div class="card-body">
  
  <form class="jotform-form" action="" method="post" name="form_210834342721852" id="" accept-charset="utf-8" autocomplete="on" novalidate="true">
  <input type="hidden" name="formID" value="">
  <input type="hidden" id="JWTContainer" value="">
  <input type="hidden" id="cardinalOrderNumber" value="">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_3" class="form-header" data-component="header">
              Request an Appointment
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="first_11"> Name </label>
        <div id="cid_11" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="name">
              <input type="text" id="first_11" name="q11_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_11 sublabel_11_first">
              
            </span>
            
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12_full"> Phone Number </label>
        <div id="cid_12" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="tel" id="input_12_full" name="q12_phoneNumber12[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_12" im-insert="true" maskvalue="(###) ###-####">
            <label class="form-sub-label is-empty" for="input_12_full" id="sublabel_12_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> E-mail </label>
        <div id="cid_13" class="form-input-wide" data-layout="half">
          <input type="email" id="input_13" name="q13_email13" class="form-textbox validate[Email]" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_13">
        </div>
      </li>
      <li class="form-line" data-type="control_appointment" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15"> Select an Appointment Date </label>
        <div id="cid_15" class="form-input-wide" data-layout="full">
          <div id="input_15" class="appointmentFieldWrapper jfQuestion-fields" data-breakpoint="shouldBreakIntoNewLine" data-breakpoint-offset="0">
            <input class="appointmentFieldInput " name="q15_selectAn[date]" id="input_15_date">
            <input class="appointmentFieldInput" name="q15_selectAn[duration]" value="60" id="input_15_duration">
            <input class="appointmentFieldInput" name="q15_selectAn[timezone]" value="America/New_York (GMT-4:00)" id="input_15_timezone">
            <div class="appointmentField">
      <div class="appointmentFieldContainer">
        <div class="appointmentFieldRow forCalendar">
          <div class="calendar appointmentCalendar">
            <div class="appointmentCalendarContainer">
              
      <div class="selectedDate">
        <input class="currentDate" type="text" value="03/25/2021" style="pointer-events: none;">
      </div>
      
      <div class="monthYearPicker">
        <div class="pickerItem">
          <select class="pickerMonth" data-name="month">
            <option value="0">January</option><option value="1">February</option><option selected="" value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option>
          </select>
          <button type="button" class="pickerArrow pickerMonthArrow prev" value="1" data-name="month"></button>
          <button type="button" class="pickerArrow pickerMonthArrow next" value="3" data-name="month"></button>
        </div>
        <div class="pickerItem">
          <select class="pickerYear" data-name="year">
            <option>2020</option><option selected="">2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option><option>2026</option><option>2027</option><option>2028</option><option>2029</option><option>2030</option><option>2031</option><option>2032</option><option>2033</option><option>2034</option><option>2035</option><option>2036</option><option>2037</option><option>2038</option><option>2039</option>
          </select>
          <button type="button" class="pickerArrow pickerYearArrow prev" value="2020" data-name="year">
          </button><button type="button" class="pickerArrow pickerYearArrow next" value="2022" data-name="year">
        </button></div>
      </div>
    
      <div class="appointmentCalendarDays days">
        <div class="daysOfWeek">
          <div class="dayOfWeek monday">MON</div><div class="dayOfWeek tuesday">TUE</div><div class="dayOfWeek wednesday">WED</div><div class="dayOfWeek thursday">THU</div><div class="dayOfWeek friday">FRI</div><div class="dayOfWeek saturday">SAT</div><div class="dayOfWeek sunday">SUN</div>
        </div>
        
      <div class="calendarWeek"><div class="calendarDay isUnavailable" data-value="2021-03-01"><span class="calendarDayEach">1</span></div><div class="calendarDay isUnavailable" data-value="2021-03-02"><span class="calendarDayEach">2</span></div><div class="calendarDay isUnavailable" data-value="2021-03-03"><span class="calendarDayEach">3</span></div><div class="calendarDay isUnavailable" data-value="2021-03-04"><span class="calendarDayEach">4</span></div><div class="calendarDay isUnavailable" data-value="2021-03-05"><span class="calendarDayEach">5</span></div><div class="calendarDay isUnavailable" data-value="2021-03-06"><span class="calendarDayEach">6</span></div><div class="calendarDay isUnavailable" data-value="2021-03-07"><span class="calendarDayEach">7</span></div></div><div class="calendarWeek"><div class="calendarDay isUnavailable" data-value="2021-03-08"><span class="calendarDayEach">8</span></div><div class="calendarDay isUnavailable" data-value="2021-03-09"><span class="calendarDayEach">9</span></div><div class="calendarDay isUnavailable" data-value="2021-03-10"><span class="calendarDayEach">10</span></div><div class="calendarDay isUnavailable" data-value="2021-03-11"><span class="calendarDayEach">11</span></div><div class="calendarDay isUnavailable" data-value="2021-03-12"><span class="calendarDayEach">12</span></div><div class="calendarDay isUnavailable" data-value="2021-03-13"><span class="calendarDayEach">13</span></div><div class="calendarDay isUnavailable" data-value="2021-03-14"><span class="calendarDayEach">14</span></div></div><div class="calendarWeek"><div class="calendarDay isUnavailable" data-value="2021-03-15"><span class="calendarDayEach">15</span></div><div class="calendarDay isUnavailable" data-value="2021-03-16"><span class="calendarDayEach">16</span></div><div class="calendarDay isUnavailable" data-value="2021-03-17"><span class="calendarDayEach">17</span></div><div class="calendarDay isUnavailable" data-value="2021-03-18"><span class="calendarDayEach">18</span></div><div class="calendarDay isUnavailable" data-value="2021-03-19"><span class="calendarDayEach">19</span></div><div class="calendarDay isUnavailable" data-value="2021-03-20"><span class="calendarDayEach">20</span></div><div class="calendarDay isUnavailable" data-value="2021-03-21"><span class="calendarDayEach">21</span></div></div><div class="calendarWeek"><div class="calendarDay isUnavailable" data-value="2021-03-22"><span class="calendarDayEach">22</span></div><div class="calendarDay isUnavailable" data-value="2021-03-23"><span class="calendarDayEach">23</span></div><div class="calendarDay isUnavailable" data-value="2021-03-24"><span class="calendarDayEach">24</span></div><div class="calendarDay isToday isActive" data-value="2021-03-25"><span class="calendarDayEach">25</span></div><div class="calendarDay " data-value="2021-03-26"><span class="calendarDayEach">26</span></div><div class="calendarDay isUnavailable" data-value="2021-03-27"><span class="calendarDayEach">27</span></div><div class="calendarDay isUnavailable" data-value="2021-03-28"><span class="calendarDayEach">28</span></div></div><div class="calendarWeek"><div class="calendarDay " data-value="2021-03-29"><span class="calendarDayEach">29</span></div><div class="calendarDay " data-value="2021-03-30"><span class="calendarDayEach">30</span></div><div class="calendarDay " data-value="2021-03-31"><span class="calendarDayEach">31</span></div><div class="calendarDay trailingDay empty"></div><div class="calendarDay trailingDay empty"></div><div class="calendarDay trailingDay empty"></div><div class="calendarDay trailingDay empty"></div></div>
    
      </div>
    
            </div>
          </div>
          <div class="appointmentDates">
            <div class="appointmentDateSelect">
              
      <div class="appointmentDate">
        Thursday, March 25
      </div>
    
              
      <div class="appointmentDayPicker dayPicker">
        <button type="button" class="appointmentDayPickerButton prev" data-value="2021-02-28">&lt;</button>
        <button type="button" class="appointmentDayPickerButton next" data-value="2021-03-26">&gt;</button>
      </div>
    
            </div>
            <div class="appointmentSlots slots ">
              <div class="appointmentSlotsContainer">
                <div class="appointmentSlot slot " data-value="2021-03-25 13:00">13:00</div><div class="appointmentSlot slot " data-value="2021-03-25 14:00">14:00</div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
        
      </div>
    </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14"> Comments </label>
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <textarea id="input_14" class="form-textarea" name="q14_comments" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_14"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit Form
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="">
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="210834342721852-210834342721852">
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='210834342721852'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "210834342721852-210834342721852";
}
  </script>
  
            </div>
          
      </div><!-- /.container-fluid -->
    </div>
    
</section>  


@endsection