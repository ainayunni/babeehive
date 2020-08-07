<table border="1" cellpadding="3" id="printLogbook">
	<tbody><tr>
		<th>Teacher ID</th>
		<th>Student ID</th>
		<th>Time</th>
    <th>Date</th>
    <th>Sender</th>
    <th>Health Condition</th>
    <th>Illness</th>
    <th>Stuff</th>
    <th>Medicine</th>
    <th>Milk 1</th>
    <th>Milk 2</th>
    <th>Breakfast</th>
    <th>Lunch</th>
    <th>Tea Time</th>
    <th>Circle Time</th>
    <th>Outdoor Activities</th>
    <th>Diapers</th>
    <th>Diapers Info</th>
    <th>Dental Care</th>
    <th>Hygienic Care</th>
    <th>Sleeping Time</th>
    <th>Remarks</th>
	</tr>
	<tr>
		<td>{{$logbook->teacher_id}}</td>
		<td>{{$logbook->student_id}}</td>
		<td>{{$logbook->time}}</td>
    <td>{{$logbook->date}}</td>
    <td>{{$logbook->sender}}</td>
    <td>{{$logbook->is_healthy}}</td>
    <td>{{$logbook->illness}}</td>
    <td>{{$logbook->equipment}}</td>
    <td>{{$logbook->medicine}}</td>
    <td>{{$logbook->milk_1}}</td>
    <td>{{$logbook->milk_2}}</td>
    <td>{{$logbook->breakfast}}</td>
    <td>{{$logbook->lunch}}</td>
    <td>{{$logbook->teatime}}</td>
    <td>{{$logbook->circle_time}}</td>
    <td>{{$logbook->outdoor}}</td>
    <td>{{$logbook->dypers}}</td>
    <td>{{$logbook->dypers_info}}</td>
    <td>{{$logbook->brush_teeth}}</td>
    <td>{{$logbook->bath}}</td>
    <td>{{$logbook->sleep}}</td>
    <td>{{$logbook->additional_note}}</td>
	</tr>
</tbody></table>


<script>
function printData()
{
var divToPrint=document.getElementById("printLogbook");
newWin= window.open("");
newWin.document.write(divToPrint.outerHTML);
newWin.print();
newWin.close();
}

$('#idbutton').on('click',function(){
printData();
})
</script>
