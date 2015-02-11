    <nav class="navbar navbar-default" role="navigation" ng-controller="HeaderController">
			<div class="container-fluid">
				<a href="?view=console"><span class="navbar-brand">ZoneMinder</span></a>

				<button type="button" class="btn btn-md navbar-btn pull-right" ng-class="isRunning ? 'btn-success' : 'btn-danger'" data-toggle="modal" data-target="#myModal">
					<span class="glyphicon glyphicon-off"></span>
				</button>

				<ul class="nav navbar-nav pull-right">
					<li><a href="?view=events">Events</a></li>
					<li><a href="?view=timeline">Timeline</a></li>
					<li><a href="?view=options">Options</a></li>
					<li><a href="?view=log">Logs</span></a></li>
					<li><a href="?view=devices">Devices</a></li>
					<li><a href="?view=host">Host</a></li>
				</ul>
			</div>
    </nav>
<div ng-include="'/skins/bootstrap/views/state.html'"></div>
