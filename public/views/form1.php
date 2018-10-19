<?php
/**
 * Created by PhpStorm.
 * User: רועי
 * Date: 19/10/2018
 * Time: 00:50
 */

function gen_tabs(){
	enqueBootStrap();
	?>

    <h1>
        <label>65498484</label>
    </h1>

	<!-- Tabs -->
	<section id="tabs">
		<div class="container">
			<div class="row">
                <div class="col-3 ">
                <h6 class="section-title h1">QC Forms</h6>
                </div>
                <div class="col-6 ">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="row">
				<div class="col-xs-12 ">
					<nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Assembly Part A</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">QC Connection and visual check</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Assembly Part B</a>
							<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">QC Before closing the LCD</a>
						</div>
					</nav>
					<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<?php add_form_1()  ?>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							this is another form
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<?php add_form_1()  ?>
						</div>
						<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
							and third form
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- ./Tabs -->


	<?php
}
function add_form_1() {

	?>
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Comment</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter comment">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleSelect1">Example select</label>
			<select class="form-control" id="exampleSelect1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleSelect2">Example multiple select</label>
			<select multiple class="form-control" id="exampleSelect2">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleTextarea">Example textarea</label>
			<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">File input</label>
			<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
			<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
		</div>
		<fieldset class="form-group">
			<legend>Radio buttons</legend>
			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Option one is this and that&mdash;be sure to include why it's great
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
					Option two can be something else and selecting it will deselect option one
				</label>
			</div>
			<div class="form-check disabled">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
					Option three is disabled
				</label>
			</div>
		</fieldset>
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input">
				Check me out
			</label>
		</div>

	</form>
<?php
}
add_shortcode('form1',gen_tabs);


