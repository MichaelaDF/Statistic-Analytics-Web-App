<script type="text/javascript">
/*
	Pick Table contents based upon form choice
	Written by: Michaela Day
	Thursday, April 5 2018
*/ 
function showData(value) {
	switch(value) {
		case "season6":
			document.getElementById("tableHere").innerHTML = '<?php $call->season6($access); ?>' ;
			break;
		case "season7":
			document.getElementById("tableHere").innerHTML = '<?php $call->season7($access); ?>' ;
			break;
		case "season8":
			document.getElementById("tableHere").innerHTML = '<?php $call->season8($access); ?>' ;
			break;
		case "season9":
			document.getElementById("tableHere").innerHTML = '<?php $call->season9($access); ?>' ;
			break;
		case "supportHero":
			document.getElementById("tableHere").innerHTML = '<?php $call->selectSupport($access); ?>' ;
			break;
		case "tankHero":
			document.getElementById("tableHere").innerHTML = '<?php $call->selectTank($access); ?>' ;
			break;
		case "dpsHero":
			document.getElementById("tableHere").innerHTML = '<?php $call->selectDPS($access); ?>' ;
			break;
		case "assaultMap":
			document.getElementById("tableHere").innerHTML = '<?php $call->assaultMap($access); ?>' ;
			break;
		case "controlMap":
			document.getElementById("tableHere").innerHTML = '<?php $call->controlMap($access); ?>' ;
			break;
		case "escortMap":
			document.getElementById("tableHere").innerHTML = '<?php $call->escortMap($access); ?>' ;
			break;
		case "hybridMap":
			document.getElementById("tableHere").innerHTML = '<?php $call->hybridMap($access); ?>' ;
			break;
		default:
			document.getElementById("tableHere").innerHTML = '<?php $call->allSessions($access); ?>' ;
	}
}
</script>