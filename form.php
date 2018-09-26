<!DOCTYPE html>
<html>
<head>
	<title>withZing Customer Survey</title>
	<?php include('includes/head.php'); ?>
	
</head>
<body id="formpage" class="survey">
	<header class="tealbg surveyHeader">
		<div class="content_container">
			<div>
				<img class="zinglogo" src="img/withzing-logo1.svg" width="80" height="80" alt="withZing Logo">
			</div>
			<div class="headtitle">
				<h1>Customer Satisfaction Survey</h1>
				<p>Question <span id="currentq"></span> / <span id="totalqs"></span></p>
			</div>
		</div>
	</header>
	<section>
		<div class="content_container">
			<form id="surveyForm" method="post" action="complete.php">

				<div class="tab">
					<p>The withZING programme is effective.</p>
					<div>
						<input id="q1v1" type="radio" name="q1" value="1" required>
						<label for="q1v1">Strongly agree</label>
						<input id="q1v2" type="radio" name="q1" value="2">
						<label for="q1v2">Agree</label>
						<input id="q1v3" type="radio" name="q1" value="3">
						<label for="q1v3">Neither agree nor disagree</label>
						<input id="q1v4" type="radio" name="q1" value="4">
						<label for="q1v4">Disagree</label>
						<input id="q1v5" type="radio" name="q1" value="5">
						<label for="q1v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING programme is reliable.</p>
					<div>
						<input id="q2v1" type="radio" name="q2" value="1" required>
						<label for="q2v1">Strongly agree</label>
						<input id="q2v2" type="radio" name="q2" value="2">
						<label for="q2v2">Agree</label>
						<input id="q2v3" type="radio" name="q2" value="3">
						<label for="q2v3">Neither agree nor disagree</label>
						<input id="q2v4" type="radio" name="q2" value="4">
						<label for="q2v4">Disagree</label>
						<input id="q2v5" type="radio" name="q2" value="5">
						<label for="q2v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING programme is inspiring.</p>
					<div>
						<input id="q3v1" type="radio" name="q3" value="1" required>
						<label for="q3v1">Strongly agree</label>
						<input id="q3v2" type="radio" name="q3" value="2">
						<label for="q3v2">Agree</label>
						<input id="q3v3" type="radio" name="q3" value="3">
						<label for="q3v3">Neither agree nor disagree</label>
						<input id="q3v4" type="radio" name="q3" value="4">
						<label for="q3v4">Disagree</label>
						<input id="q3v5" type="radio" name="q3" value="5">
						<label for="q3v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING programme is life changing.</p>
					<div>
						<input id="q4v1" type="radio" name="q4" value="1" required>
						<label for="q4v1">Strongly agree</label>
						<input id="q4v2" type="radio" name="q4" value="2">
						<label for="q4v2">Agree</label>
						<input id="q4v3" type="radio" name="q4" value="3">
						<label for="q4v3">Neither agree nor disagree</label>
						<input id="q4v4" type="radio" name="q4" value="4">
						<label for="q4v4">Disagree</label>
						<input id="q4v5" type="radio" name="q4" value="5">
						<label for="q4v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING support staff are responsive.</p>
					<div>
						<input id="q5v1" type="radio" name="q5" value="1" required>
						<label for="q5v1">Strongly agree</label>
						<input id="q5v2" type="radio" name="q5" value="2">
						<label for="q5v2">Agree</label>
						<input id="q5v3" type="radio" name="q5" value="3">
						<label for="q5v3">Neither agree nor disagree</label>
						<input id="q5v4" type="radio" name="q5" value="4">
						<label for="q5v4">Disagree</label>
						<input id="q5v5" type="radio" name="q5" value="5">
						<label for="q5v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING support staff are knowledgeable.</p>
					<div>
						<input id="q6v1" type="radio" name="q6" value="1" required>
						<label for="q6v1">Strongly agree</label>
						<input id="q6v2" type="radio" name="q6" value="2">
						<label for="q6v2">Agree</label>
						<input id="q6v3" type="radio" name="q6" value="3">
						<label for="q6v3">Neither agree nor disagree</label>
						<input id="q6v4" type="radio" name="q6" value="4">
						<label for="q6v4">Disagree</label>
						<input id="q6v5" type="radio" name="q6" value="5">
						<label for="q6v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING support staff are helpful.</p>
					<div>
						<input id="q7v1" type="radio" name="q7" value="1" required>
						<label for="q7v1">Strongly agree</label>
						<input id="q7v2" type="radio" name="q7" value="2">
						<label for="q7v2">Agree</label>
						<input id="q7v3" type="radio" name="q7" value="3">
						<label for="q7v3">Neither agree nor disagree</label>
						<input id="q7v4" type="radio" name="q7" value="4">
						<label for="q7v4">Disagree</label>
						<input id="q7v5" type="radio" name="q7" value="5">
						<label for="q7v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>The withZING programme represents value for money.</p>
					<div>
						<input id="q8v1" type="radio" name="q8" value="1" required>
						<label for="q8v1">Strongly agree</label>
						<input id="q8v2" type="radio" name="q8" value="2">
						<label for="q8v2">Agree</label>
						<input id="q8v3" type="radio" name="q8" value="3">
						<label for="q8v3">Neither agree nor disagree</label>
						<input id="q8v4" type="radio" name="q8" value="4">
						<label for="q8v4">Disagree</label>
						<input id="q8v5" type="radio" name="q8" value="5">
						<label for="q8v5">Strongly disagree</label>
					</div>
				</div>

				<div class="tab">
					<p>How likely would you be to recommend withZING to friends or family&quest;</p>
					<div>
						<input id="q9v1" type="radio" name="q9" value="1" required>
						<label for="q9v1">Extremely likely</label>
						<input id="q9v2" type="radio" name="q9" value="2">
						<label for="q9v2">Likely</label>
						<input id="q9v3" type="radio" name="q9" value="3">
						<label for="q9v3">Neither likely nor unlikely</label>
						<input id="q9v4" type="radio" name="q9" value="4">
						<label for="q9v4">Unlikely</label>
						<input id="q9v5" type="radio" name="q9" value="5">
						<label for="q9v5">Extremely unlikely</label>
					</div>
				</div>

				<div class="tab">
					<p>Is there anything that you think we could do to improve the withZING experience&quest;<br>
					Please describe in detail.</p>
					<textarea type="text" name="q10" rows="6" placeholder="Please type here..."></textarea>
					<input type="hidden">
					<!-- An input element is required for each question -->
				</div>

				<div id="controlBtns">
					<button class="button" type="button" id="prevBtn" onclick="nextPrev(-1); nextBtnActive()"><i class="fas fa-chevron-left"></i>Back</button>
					<button class="button" type="button" id="nextBtn" onclick="nextPrev(1)">Next<i class="fas fa-chevron-right"></i></button>
				</div>

			</form>
		</div>
	</section>
	<div id="waiting">
		<i style="display: block;" id="spinner" class="fas fa-sync fa-spin"></i>
	</div>
	<script src="js/formSteps.js"></script>
</body>
</html>