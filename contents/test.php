<html lang="en" >
<body ng-app="autocompleteDemo" ng-cloak>
<md-toolbar class="md-cold">
    <div class="md-toolbar-tools">
        <h2 class="md-flex">HTML 5</h2>
    </div>
</md-toolbar>
<div ng-controller="DemoCtrl as ctrl" layout="column" ng-cloak>
    <md-content class="md-padding">
        <form name="test" ng-submit="$event.preventDefault()">
            <p>Use <code>md-autocomplete</code> to search for matches from local or remote data sources.</p>
            <md-autocomplete
                ng-disabled="ctrl.isDisabled"
                md-no-cache="ctrl.noCache"
                md-selected-item="ctrl.selectedItem"
                md-search-text-change="ctrl.searchTextChange(ctrl.searchText)"
                md-search-text="ctrl.searchText"
                md-selected-item-change="ctrl.selectedItemChange(item)"
                md-items="item in ctrl.querySearch(ctrl.searchText)"
                md-item-text="item.display"
                md-min-length="0"
                placeholder="What is your favorite US state?">
                <md-item-template>
                    <span md-highlight-text="ctrl.searchText" md-highlight-flags="^i">{{item.display}}</span>
                </md-item-template>
                <md-not-found>
                    No states matching "{{ctrl.searchText}}" were found.
                    <a ng-click="ctrl.newState(ctrl.searchText)">Create a new one!</a>
                </md-not-found>
            </md-autocomplete>
            <br/>
            <md-checkbox aria-label="testvalue" name="testcheck" ng-model="ctrl.simulateQuery" class="md-primary" ng-disabled="false">Simulate query for results?</md-checkbox>
            <md-checkbox ng-model="ctrl.noCache">Disable caching of queries?</md-checkbox>
            <md-checkbox ng-model="ctrl.isDisabled">Disable the input?</md-checkbox>

            <p>By default, <code>md-autocomplete</code> will cache results when performing a query.  After the initial call is performed, it will use the cached results to eliminate unnecessary server requests or lookup logic. This can be disabled above.</p>
        </form>
        <code>ctrl.simulateQuery : {{ctrl.simulateQuery}}</code><br>
        <code>ctrl.noCache : {{ctrl.noCache}}</code><br>
        <code>ctrl.isDisabled : {{ctrl.isDisabled}}</code><br>
        <input type="checkbox" value ng-checked="ctrl.simulateQuery" />
        <br>
        <form action="./tr-demos.php">
            <md-checkbox ng-model="option1" class="md-primary">Option 1</md-checkbox>
            <input type="checkbox" ng-checked="option1"><br>
            <md-checkbox ng-model="option2" class="md-warn">Option 2</md-checkbox>
            <input type="checkbox" ng-checked="option2" class="md-checkbox"><br>
            <md-checkbox ng-model="option3" >Option 3</md-checkbox>
            <input type="checkbox" ng-checked="option3"><br>
            <md-button ng-model="submit" md-ink-ripple="#ff0000" class="md-raised">Valider</md-button>
            <input type="button" value="Valider" class="md-button md-raised md-primary">
            <div>
                <md-button type="submit" class="md-button md-raised md-primary">Submit</md-button>
            </div>
        </form>
    </md-content>
</div>
</body>
</html>