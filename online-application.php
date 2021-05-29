<?php
$CurrentMenu = "m7";
$PageTitle = "Online Application";
$Description = "";
$Keywords = "";
$FullWidth = "yes";

include "header.php";
?>

<h1>Molded Dimensions Online Application</h1>

<form action="form-online-application.php" method="POST" enctype="multipart/form-data" id="onlineapp" novalidate>
  <div id="page1">
    <span style="color: #C91D1B;">*</span> = Required Item<br>
    <br>

    <div class="upload">
      <input type="file" name="resume">
      <button>Upload Resume <span>(PDF or DOCX files)</span></button>
    </div>
    <br><br>

    <div class="flex">
      <label id="firstname">
        First Name <span>*</span><br>
        <input type="text" name="firstname" required>
      </label>

      <label id="lastname">
        Last Name <span>*</span><br>
        <input type="text" name="lastname" required>
      </label>

      <label id="middlei">
        M.I<br>
        <input type="text" name="middlei">
      </label>
    </div>

    <div class="flex">
      <label id="address">
        Street Address <span>*</span><br>
        <input type="text" name="address" required>
      </label>

      <label id="city">
        City <span>*</span><br>
        <input type="text" name="city" required>
      </label>

      <label id="state">
        State <span>*</span><br>
        <input type="text" name="state" required>
      </label>

      <label id="zip">
        Zip Code <span>*</span><br>
        <input type="text" pattern="[0-9]*" name="zip" required>
      </label>
    </div>

    <div class="flex">
      <label id="phone">
        Phone <span>*</span><br>
        <input type="tel" name="phone" required>
      </label>

      <label id="email">
        Email <span>*</span><br>
        <input type="email" name="email" required>
      </label>

      <div id="age" class="radio">
        Are you at least 18 years old? <span style="color: #C91D1B;">*</span>
        <div class="note"></div>

        <input type="radio" name="age" value="Yes" id="agey"><label for="agey">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="age" value="No" id="agen"><label for="agen">No</label>
      </div>
    </div>

    <div class="flex">
      <div id="time" class="radio">
        Full Time or Part Time? <span style="color: #C91D1B;">*</span>
        <div class="note"></div>

        <input type="radio" name="time" value="Full Time" id="timef"><label for="timef">Full Time</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="time" value="Part Time" id="timep"><label for="timep">Part Time</label>
      </div>

      <label id="salary">
        Desired Salary <span>*</span><br>
        <input type="text" name="salary" required>
      </label>

      <label id="position">
        Position Applied For <span>*</span><br>
        <input type="text" name="position" required>
      </label>

      <label id="shift">
        Desired Shift<br>
        <select name="shift">
          <option value="">Select...</option>
          <option value="First">First</option>
          <option value="Second">Second</option>
          <option value="Third">Third</option>
          <option value="Any">Any</option>
        </select>
      </label>
    </div>

    <div class="flex">
      <div id="citizen" class="radio">
        Are You a Citizen of the United States? <span style="color: #C91D1B;">*</span>
        <div class="note"></div>

        <input type="radio" name="citizen" value="Yes" id="citizeny"><label for="citizeny">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="citizen" value="No" id="citizenn"><label for="citizenn">No</label>
      </div>

      <div id="authorized" class="radio">
        Are You Legally Authorized to Work in the US? <span style="color: #C91D1B;">*</span>
        <div class="note">If hired, you will be required to provide proof of work authorization.</div>

        <input type="radio" name="authorized" value="Yes" id="authorizedy"><label for="authorizedy">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="authorized" value="No" id="authorizedn"><label for="authorizedn">No</label>
      </div>
    </div>

    <div class="flex">
      <div id="felony" class="radio">
        Have you ever been convicted of a felony? <span style="color: #C91D1B;">*</span>
        <div class="note">Convictions are not an automatic bar to employment</div>

        <input type="radio" name="felony" value="Yes" id="felonyy"><label for="felonyy">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="felony" value="No" id="felonyn"><label for="felonyn">No</label>
      </div>

      <label id="felonyexplain">
        If yes explain 1) nature of crime, 2) date of conviction, and 3) state in which convicted<br>
        <textarea name="felonyexplain"></textarea>
      </label>
    </div>

    <div class="flex">
      <div id="pending" class="radio">
        Do you have any pending criminal charges against you? <span style="color: #C91D1B;">*</span>
        <div class="note"></div>

        <input type="radio" name="pending" value="Yes" id="pendingy"><label for="pendingy">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="pending" value="No" id="pendingn"><label for="pendingn">No</label>
      </div>

      <label id="pendingexplain">
        If yes, describe the 1) nature of charges, 2) date issued, and 3) county and state where issued.<br>
        <textarea name="pendingexplain"></textarea>
      </label>
    </div>

    <div class="flex">
      <div id="worked" class="radio">
        Have you ever worked for this company before? <span style="color: #C91D1B;">*</span>
        <div class="note"></div>

        <input type="radio" name="worked" value="Yes" id="workedy"><label for="workedy">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="worked" value="No" id="workedn"><label for="workedn">No</label>
      </div>

      <label id="workedwhen">
        If so when?<br>
        <textarea name="workedwhen"></textarea>
      </label>
    </div>

    <label id="referred">
      How were you referred to Molded Dimensions?<br>
      <select name="referred">
        <option value="">Select...</option>
        <option value="Agency">Agency</option>
        <option value="Walk-in">Walk-in</option>
        <option value="Newspaper">Newspaper</option>
        <option value="School">School</option>
        <option value="Friend / Relative">Friend / Relative</option>
        <option value="Other">Other</option>
      </select>
    </label>

    <br>

    <div class="nav">
      <div class="pager">
        <span class="active"></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <a href="#" class="submit topage2">Next Page</a><br>

      Page 1/4
    </div> <!-- /.nav -->
  </div> <!-- /#page1 -->

  <div id="page2" class="hidden">
    <strong style="color: #C91D1B;">If you have uploaded a resume you may skip these areas</strong><br>
    <br>

    <label>
      If relevant, please describe work processing speed, software knowledge, and office equipment.<br>
      <textarea name="officeequipment"></textarea>
    </label>

    <label>
      If relevant, please describe experience using manufacturing machines and equipment.<br>
      <textarea name="manufacturingequipment"></textarea>
    </label>

    <strong style="color: #C91D1B;">EDUCATION</strong><br>
    <br>

    <div class="flex">
      <label class="school">
        High School<br>
        <input type="text" name="highschool">
      </label>

      <label class="address">
        Address<br>
        <input type="text" name="highschooladdress">
      </label>

      <label class="from">
        From<br>
        <input type="text" name="highschoolfrom">
      </label>

      <label class="to">
        To<br>
        <input type="text" name="highschoolto">
      </label>
    </div>

    <div class="flex">
      <label class="degree">
        Degree<br>
        <input type="text" name="highschooldegree">
      </label>

      <div class="radio graduate">
        Did You Graduate?
        <div class="note"></div>

        <input type="radio" name="highschoolgraduate" value="Yes" id="highschoolgraduatey"><label for="highschoolgraduatey">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="highschoolgraduate" value="No" id="highschoolgraduaten"><label for="highschoolgraduaten">No</label>
      </div>
    </div>

    <div class="flex">
      <label class="school">
        College<br>
        <input type="text" name="college">
      </label>

      <label class="address">
        Address<br>
        <input type="text" name="collegeaddress">
      </label>

      <label class="from">
        From<br>
        <input type="text" name="collegefrom">
      </label>

      <label class="to">
        To<br>
        <input type="text" name="collegeto">
      </label>
    </div>

    <div class="flex">
      <label class="degree">
        Degree<br>
        <input type="text" name="collegedegree">
      </label>

      <div class="radio graduate">
        Did You Graduate?
        <div class="note"></div>

        <input type="radio" name="collegegraduate" value="Yes" id="collegegraduatey"><label for="collegegraduatey">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="collegegraduate" value="No" id="collegegraduaten"><label for="collegegraduaten">No</label>
      </div>
    </div>

    <div class="flex">
      <label class="school">
        Graduate<br>
        <input type="text" name="graduate">
      </label>

      <label class="address">
        Address<br>
        <input type="text" name="graduateaddress">
      </label>

      <label class="from">
        From<br>
        <input type="text" name="graduatefrom">
      </label>

      <label class="to">
        To<br>
        <input type="text" name="graduateto">
      </label>
    </div>

    <div class="flex">
      <label class="degree">
        Degree<br>
        <input type="text" name="graduatedegree">
      </label>

      <div class="radio graduate">
        Did You Graduate?
        <div class="note"></div>

        <input type="radio" name="graduategraduate" value="Yes" id="graduategraduatey"><label for="graduategraduatey">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="graduategraduate" value="No" id="graduategraduaten"><label for="graduategraduaten">No</label>
      </div>
    </div>

    <div class="flex">
      <label class="school">
        Other<br>
        <input type="text" name="other">
      </label>

      <label class="address">
        Address<br>
        <input type="text" name="otheraddress">
      </label>

      <label class="from">
        From<br>
        <input type="text" name="otherfrom">
      </label>

      <label class="to">
        To<br>
        <input type="text" name="otherto">
      </label>
    </div>

    <div class="flex">
      <label class="degree">
        Degree<br>
        <input type="text" name="otherdegree">
      </label>

      <div class="radio graduate">
        Did You Graduate?
        <div class="note"></div>

        <input type="radio" name="othergraduate" value="Yes" id="othergraduatey"><label for="othergraduatey">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="othergraduate" value="No" id="othergraduaten"><label for="othergraduaten">No</label>
      </div>
    </div>

    <br>

    <strong style="color: #C91D1B;">TRAINING COURSES (LIST ANY RELEVANT TRAINING PROGRAMS COMPLETED)</strong><br>
    <br>

    <div class="flex flex4">
      <label>
        Course/Seminar<br>
        <input type="text" name="trainingcourse1">
      </label>

      <label>
        Organization<br>
        <input type="text" name="trainingorg1">
      </label>

      <label>
        Content<br>
        <input type="text" name="trainingcontent1">
      </label>

      <label>
        Date(s) Attended<br>
        <input type="text" name="trainingdate1">
      </label>

      <label>
        Course/Seminar<br>
        <input type="text" name="trainingcourse2">
      </label>

      <label>
        Organization<br>
        <input type="text" name="trainingorg2">
      </label>

      <label>
        Content<br>
        <input type="text" name="trainingcontent2">
      </label>

      <label>
        Date(s) Attended<br>
        <input type="text" name="trainingdate2">
      </label>

      <label>
        Course/Seminar<br>
        <input type="text" name="trainingcourse3">
      </label>

      <label>
        Organization<br>
        <input type="text" name="trainingorg3">
      </label>

      <label>
        Content<br>
        <input type="text" name="trainingcontent3">
      </label>

      <label>
        Date(s) Attended<br>
        <input type="text" name="trainingdate3">
      </label>

      <label>
        Course/Seminar<br>
        <input type="text" name="trainingcourse4">
      </label>

      <label>
        Organization<br>
        <input type="text" name="trainingorg4">
      </label>

      <label>
        Content<br>
        <input type="text" name="trainingcontent4">
      </label>

      <label>
        Date(s) Attended<br>
        <input type="text" name="trainingdate4">
      </label>
    </div>

    <br><br>

    <div class="nav">
      <div class="pager">
        <a href="#" class="topage1"></a>
        <span class="active"></span>
        <span></span>
        <span></span>
      </div>

      <a href="#" class="submit topage3">Next Page</a><br>

      Page 2/4
    </div> <!-- /.nav -->
  </div> <!-- /#page2 -->

  <div id="page3" class="hidden">
    <strong style="color: #C91D1B;">If you have uploaded a resume you may skip these areas</strong><br>
    <br>

    <strong style="color: #C91D1B;">EMPLOYMENT HISTORY (START WITH MOST RECENT)</strong><br>
    <br>

    <div class="flex">
      <label class="empcompany">
        Company<br>
        <input type="text" name="employmentcompany1">
      </label>

      <label class="empphone">
        Phone<br>
        <input type="tel" name="employmentphone1">
      </label>

      <label class="empsupervisor">
        Supervisor<br>
        <input type="text" name="employmentsupervisor1">
      </label>
    </div>

    <div class="flex">
      <label class="empaddress">
        Address<br>
        <input type="text" name="employmentaddress1">
      </label>

      <label class="emptitle">
        Job Title<br>
        <input type="text" name="employmenttitle1">
      </label>

      <label class="empfrom">
        From<br>
        <input type="text" name="employmentfrom1">
      </label>

      <label class="empto">
        To<br>
        <input type="text" name="employmentto1">
      </label>
    </div>

    <div class="flex">
      <div class="radio empcontact">
        Can We Contact Your Supervisor?
        <div class="note"></div>

        <input type="radio" name="empcontact1" value="Yes" id="empcontact1y"><label for="empcontact1y">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="empcontact1" value="No" id="empcontact1n"><label for="empcontact1n">No</label>
      </div>

      <label class="empsalary">
        Starting Salary<br>
        <input type="text" name="employmentstartingsalary1">
      </label>

      <label class="empsalary">
        Ending Salary<br>
        <input type="text" name="employmentendingsalary1">
      </label>

      <label class="empleaving">
        Reason for Leaving?<br>
        <input type="text" name="employmentleaving1">
      </label>
    </div>

    <label>
      Responsibilities<br>
      <textarea name="employmentreponsibilities1"></textarea>
    </label>

    <br>

    <div class="flex">
      <label class="empcompany">
        Company<br>
        <input type="text" name="employmentcompany2">
      </label>

      <label class="empphone">
        Phone<br>
        <input type="tel" name="employmentphone2">
      </label>

      <label class="empsupervisor">
        Supervisor<br>
        <input type="text" name="employmentsupervisor2">
      </label>
    </div>

    <div class="flex">
      <label class="empaddress">
        Address<br>
        <input type="text" name="employmentaddress2">
      </label>

      <label class="emptitle">
        Job Title<br>
        <input type="text" name="employmenttitle2">
      </label>

      <label class="empfrom">
        From<br>
        <input type="text" name="employmentfrom2">
      </label>

      <label class="empto">
        To<br>
        <input type="text" name="employmentto2">
      </label>
    </div>

    <div class="flex">
      <div class="radio empcontact">
        Can We Contact Your Supervisor?
        <div class="note"></div>

        <input type="radio" name="empcontact2" value="Yes" id="empcontact2y"><label for="empcontact2y">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="empcontact2" value="No" id="empcontact2n"><label for="empcontact2n">No</label>
      </div>

      <label class="empsalary">
        Starting Salary<br>
        <input type="text" name="employmentstartingsalary2">
      </label>

      <label class="empsalary">
        Ending Salary<br>
        <input type="text" name="employmentendingsalary2">
      </label>

      <label class="empleaving">
        Reason for Leaving?<br>
        <input type="text" name="employmentleaving2">
      </label>
    </div>

    <label>
      Responsibilities<br>
      <textarea name="employmentreponsibilities2"></textarea>
    </label>

    <br>

    <div class="flex">
      <label class="empcompany">
        Company<br>
        <input type="text" name="employmentcompany3">
      </label>

      <label class="empphone">
        Phone<br>
        <input type="tel" name="employmentphone3">
      </label>

      <label class="empsupervisor">
        Supervisor<br>
        <input type="text" name="employmentsupervisor3">
      </label>
    </div>

    <div class="flex">
      <label class="empaddress">
        Address<br>
        <input type="text" name="employmentaddress3">
      </label>

      <label class="emptitle">
        Job Title<br>
        <input type="text" name="employmenttitle3">
      </label>

      <label class="empfrom">
        From<br>
        <input type="text" name="employmentfrom3">
      </label>

      <label class="empto">
        To<br>
        <input type="text" name="employmentto3">
      </label>
    </div>

    <div class="flex">
      <div class="radio empcontact">
        Can We Contact Your Supervisor?
        <div class="note"></div>

        <input type="radio" name="empcontact3" value="Yes" id="empcontact3y"><label for="empcontact3y">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="empcontact3" value="No" id="empcontact3n"><label for="empcontact3n">No</label>
      </div>

      <label class="empsalary">
        Starting Salary<br>
        <input type="text" name="employmentstartingsalary3">
      </label>

      <label class="empsalary">
        Ending Salary<br>
        <input type="text" name="employmentendingsalary3">
      </label>

      <label class="empleaving">
        Reason for Leaving?<br>
        <input type="text" name="employmentleaving3">
      </label>
    </div>

    <label>
      Responsibilities<br>
      <textarea name="employmentreponsibilities3"></textarea>
    </label>

    <br><br>

    <div class="nav">
      <div class="pager">
        <a href="#" class="topage1"></a>
        <a href="#" class="topage2"></a>
        <span class="active"></span>
        <span></span>
      </div>

      <a href="#" class="submit topage4">Next Page</a><br>

      Page 3/4
    </div> <!-- /.nav -->
  </div> <!-- /#page3 -->

  <div id="page4" class="hidden">
    <strong style="color: #C91D1B;">INVITATION TO IDENTIFY FOR AFFIRMATIVE ACTION PURPOSES</strong><br>
    Our company is an equal opportunity employer and does not discriminate in hiring or employment on the basis of race, color, religion, sex, national origin, age, disability, or any other basis prohibited by federal, state, or local law. No question on this form is intended to secure information to be used for such discrimination. The company is required by federal regulations to report information as requested below. Your contribution of this information is completely voluntary and in no way affects the decision regarding your employment opportunity. The information you provide is strictly confidential and will be maintained separate from your application form.<br>
    <br>

    <div class="flex">
      <label class="half">
        Applicant Name<br>
        <input type="text" name="aaname">
      </label>

      <label class="half">
        Position Applied For<br>
        <input type="text" name="aapos">
      </label>
    </div>

    <div class="flex">
      <div class="radio aasex">
        Please Check One<br>
        <input type="radio" name="aasex" value="Male" id="aasexm"><label for="aasexm">Male</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="aasex" value="Female" id="aasexf"><label for="aasexf">Female</label>
      </div>

      <div class="radio aarace">
        Indicate the Appropriate Race/Ethnic Group; Check One<br>
        <input type="radio" name="aarace" value="Hispanic or Latino" id="aarace1"><label for="aarace1">Hispanic or Latino</label>
        <input type="radio" name="aarace" value="White" id="aarace2"><label for="aarace2">White</label>
        <input type="radio" name="aarace" value="Black or African American" id="aarace3"><label for="aarace3">Black or African American</label>
        <input type="radio" name="aarace" value="Asian" id="aarace4"><label for="aarace4">Asian</label>
        <input type="radio" name="aarace" value="Native Hawaiian or Other Pacific Islander" id="aarace5"><label for="aarace5">Native Hawaiian or Other Pacific Islander</label>
        <input type="radio" name="aarace" value="American Indian Or Alaska Native" id="aarace6"><label for="aarace6">American Indian Or Alaska Native</label>
        <input type="radio" name="aarace" value="Two or More Races" id="aarace7"><label for="aarace7">Two or More Races</label>
      </div>
    </div>

    <div class="radio aareferred">
      How Were You Referred To This Job?<br>
      <input type="radio" name="aareferred" value="School/Job" id="aareferred1"><label for="aareferred1">School/Job</label>
      <input type="radio" name="aareferred" value="Advertisement" id="aareferred2"><label for="aareferred2">Advertisement</label>
      <input type="radio" name="aareferred" value="Search Firm" id="aareferred3"><label for="aareferred3">Search Firm</label>
      <input type="radio" name="aareferred" value="State Job Service" id="aareferred4"><label for="aareferred4">State Job Service</label>
      <input type="radio" name="aareferred" value="Walk-In" id="aareferred5"><label for="aareferred5">Walk-In</label>
      <input type="radio" name="aareferred" value="Employee Referral" id="aareferred6"><label for="aareferred6">Employee Referral</label>

      <div class="flex">
        <div>
          <input type="radio" name="aareferred" value="Other" id="aareferred7"><label for="aareferred7">Other</label><br>
          <input type="text" name="aareferredother">
        </div>

        <div>
          <input type="radio" name="aareferred" value="Government Agency" id="aareferred8"><label for="aareferred8">Government Agency</label><br>
          <input type="text" name="aareferredgov">
        </div>
      </div>
    </div>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="g-recaptcha" data-sitekey="6Ldfu08UAAAAADe5Ys4WvB2gJKp-M4--7R85mvCU"></div>

    <br><br>

    <div class="nav">
      <div class="pager">
        <a href="#" class="topage1"></a>
        <a href="#" class="topage2"></a>
        <a href="#" class="topage3"></a>
        <span class="active"></span>
      </div>

      <input type="submit" name="submit" value="Finish"><br>

      Page 4/4
    </div> <!-- /.nav -->
  </div> <!-- /#page4 -->
</form>

<script type="text/javascript">
  $(document).ready(function() {
    $(".topage1").click(function(event){
      event.preventDefault();

      $("#page1, #page2, #page3, #page4").removeClass('hidden');
      $("#page2, #page3, #page4").addClass('hidden');
      $(window).scrollTop(0);
    });

    $(".topage2").click(function(event){
      event.preventDefault();

      function Page1Val() {
        var page1missing = 'no';
        $('#page1 [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            page1missing = 'yes';
          }
          if (!$("input:radio[name='age']").is(":checked")) {
            $("#age").addClass('alert');
            page1missing = 'yes';
          }
        });
        return (page1missing == 'no') ? true : false;
      }

      if (Page1Val()) {
        $("#page1, #page2, #page3, #page4").removeClass('hidden');
        $("#page1, #page3, #page4").addClass('hidden');
        $('#page1 .alert').each(function(){ $(this).removeClass('alert').attr("placeholder", ""); });
        $(window).scrollTop(0);
      }
    });

    $(".topage3").click(function(event){
      event.preventDefault();

      function Page2Val() {
        var page2missing = 'no';
        $('#page2 [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            page2missing = 'yes';
          }
        });
        return (page2missing == 'no') ? true : false;
      }

      if (Page2Val()) {
        $("#page1, #page2, #page3, #page4").removeClass('hidden');
        $("#page1, #page2, #page4").addClass('hidden');
        $('#page2 .alert').each(function(){ $(this).removeClass('alert').attr("placeholder", ""); });
        $(window).scrollTop(0);
      }
    });

    $(".topage4").click(function(event){
      event.preventDefault();

      function Page3Val() {
        var page3missing = 'no';
        $('#page3 [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            page3missing = 'yes';
          }
        });
        return (page3missing == 'no') ? true : false;
      }

      if (Page3Val()) {
        $("#page1, #page2, #page3, #page4").removeClass('hidden');
        $("#page1, #page2, #page3").addClass('hidden');
        $('#page3 .alert').each(function(){ $(this).removeClass('alert').attr("placeholder", ""); });
        $(window).scrollTop(0);
      }
    });

    $('input[name="resume"]').change(function() {
      var output = $(this).val().split('\\').pop();
      $(this).parent().after('<span>'+output+'</span>');
    });

    var form = $('#onlineapp');
    $(form).submit(function(event) {
      event.preventDefault();

      var form = '#'+$(this).attr('id');
      var formData = new FormData(this);

      $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
          if (data) $.fancybox.open('<div id="alert-modal">'+data+'</div>');
          $(form).find('input[type="text"], input[type="email"], input[type="tel"], textarea, select').val('');
          $(form).find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
        }
      });
    });
  });
</script>

<?php include "footer.php"; ?>