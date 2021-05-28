<?php
/**
 * Template Name: FBI Wanted
 *
 */
get_header();
?>
<div class="container">
	<div class="fbi-offices-list">
		<select>
			<option selected disabled>-- FBI offices --</option>
			<option value="albany">Albany</option>
			<option value="albuquerque">Albuquerque</option>
			<option value="anchorage">Anchorage</option>
			<option value="atlanta">Atlanta</option>
			<option value="baltimore">Baltimore</option>
			<option value="birmingham">Birmingham</option>
			<option value="boston">Boston</option>
			<option value="buffalo">Buffalo</option>
			<option value="charlotte">Charlotte</option>
			<option value="chicago">Chicago</option>
			<option value="cincinnati">Cincinnati</option>
			<option value="cleveland">Cleveland</option>
			<option value="columbia">Columbia</option>
			<option value="dallas">Dallas</option>
			<option value="denver">Denver</option>
			<option value="detroit">Detroit</option>
			<option value="elpaso">El Paso</option>
			<option value="honolulu">Honolulu</option>
			<option value="houston">Houston</option>
			<option value="indianapolis">Indianapolis</option>
			<option value="jackson">Jackson</option>
			<option value="jacksonville">Jacksonville</option>
			<option value="kansascity">Kansas City</option>
			<option value="knoxville">Knoxville</option>
			<option value="lasvegas">Las Vegas</option>
			<option value="littlerock">Little Rock</option>
			<option value="losangeles">Los Angeles</option>
			<option value="louisville">Louisville</option>
			<option value="memphis">Memphis</option>
			<option value="miami">Miami</option>
			<option value="milwaukee">Milwaukee</option>
			<option value="minneapolis">Minneapolis</option>
			<option value="mobile">Mobile</option>
			<option value="newhaven">New Haven</option>
			<option value="neworleans">New Orleans</option>
			<option value="newyork">New York</option>
			<option value="newark">Newark</option>
			<option value="norfolk">Norfolk</option>
			<option value="oklahomacity">Oklahoma City</option>
			<option value="omaha">Omaha</option>
			<option value="philadelphia">Philadelphia</option>
			<option value="phoenix">Phoenix</option>
			<option value="pittsburgh">Pittsburgh</option>
			<option value="portland">Portland</option>
			<option value="richmond">Richmond</option>
			<option value="sacramento">Sacramento</option>
			<option value="saltlakecity">Salt Lake City</option>
			<option value="sanantonio">San Antonio</option>
			<option value="sandiego">San Diego</option>
			<option value="sanfrancisco">San Francisco</option>
			<option value="sanjuan">San Juan</option>
			<option value="seattle">Seattle</option>
			<option value="springfield">Springfield</option>
			<option value="stlouis">St. Louis</option>
			<option value="tampa">Tampa</option>
			<option value="washington">Washington</option>
		</select>
	</div>
	<div class="spinner-grow" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="fbi-data row" >
	</div>
	<div class="fbi-error">
		<p class="text-danger">No have a data!</p>
	</div>
</div>


<?php
get_footer();
