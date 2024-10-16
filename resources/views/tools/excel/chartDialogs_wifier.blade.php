
<!--This is the html file for chart dialog-->
<div class="select-chart-dialog">
    <div class="select-chart-tab-page">
        <div class="select-chart-type">
            <ul>
                <li class="chart-type-category" data-name="ColumnGroup">
                    <span class="select-chart-category-icon select-chart-category-column"></span>
                    <span data-bind="text: res.selectChartDialog.column"
                          class="select-chart-category-text">Column</span>
                </li>
                <li class="chart-type-category" data-name="LineGroup">
                    <span class="select-chart-category-icon select-chart-category-line"></span>
                    <span data-bind="text: res.selectChartDialog.line" class="select-chart-category-text">Line</span>
                </li>
                <li class="chart-type-category" data-name="PieGroup">
                    <span class="select-chart-category-icon select-chart-category-pie"></span>
                    <span data-bind="text: res.selectChartDialog.pie" class="select-chart-category-text">Pie</span>
                </li>
                <li class="chart-type-category" data-name="BarGroup">
                    <span class="select-chart-category-icon select-chart-category-bar"></span>
                    <span data-bind="text: res.selectChartDialog.bar" class="select-chart-category-text">Bar</span>
                </li>
                <li class="chart-type-category" data-name="AreaGroup">
                    <span class="select-chart-category-icon select-chart-category-area"></span>
                    <span data-bind="text: res.selectChartDialog.area" class="select-chart-category-text">Area</span>
                </li>
                <li class="chart-type-category" data-name="ScatterGroup">
                    <span class="select-chart-category-icon select-chart-category-scatter"></span>
                    <span data-bind="text: res.selectChartDialog.XYScatter" class="select-chart-category-text">X Y(Scatter)</span>
                </li>
                <li class="chart-type-category" data-name="StockGroup">
                    <span class="select-chart-category-icon select-chart-category-stock"></span>
                    <span data-bind="text: res.selectChartDialog.stock" class="select-chart-category-text">Stock</span>
                </li>
                <li class="chart-type-category" data-name="ComboGroup">
                    <span class="select-chart-category-icon select-chart-category-combo"></span>
                    <span data-bind="text: res.selectChartDialog.combo" class="select-chart-category-text">Combo</span>
                </li>
            </ul>
        </div>
        <div class="select-chart-detail">
            <div class="select-chart-type-subtype">
                <div class="select-chart-type-subtype-item" data-name="columnClustered" data-group="ColumnGroup"
                     data-bind="attr: { title: res.selectChartDialog.columnClustered}">
                    <span class="chart-type-subtype-icon clustered-column-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="columnStacked" data-group="ColumnGroup"
                     data-bind="attr: { title: res.selectChartDialog.columnStacked}">
                    <span class="chart-type-subtype-icon stacked-column-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="columnStacked100" data-group="ColumnGroup"
                     data-bind="attr: { title: res.selectChartDialog.columnStacked100}">
                    <span class="chart-type-subtype-icon stacked100-column-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="line" data-group="LineGroup"
                     data-bind="attr: { title: res.selectChartDialog.line}">
                    <span class="chart-type-subtype-icon line-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="lineStacked" data-group="LineGroup"
                     data-bind="attr: { title: res.selectChartDialog.lineStacked}">
                    <span class="chart-type-subtype-icon stacked-line-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="lineStacked100" data-group="LineGroup"
                     data-bind="attr: { title: res.selectChartDialog.lineStacked100}">
                    <span class="chart-type-subtype-icon stacked100-line-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="lineMarkers" data-group="LineGroup"
                     data-bind="attr: { title: res.selectChartDialog.lineMarkers}">
                    <span class="chart-type-subtype-icon line-with-markers-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="lineMarkersStacked" data-group="LineGroup"
                     data-bind="attr: { title: res.selectChartDialog.lineMarkersStacked}">
                    <span class="chart-type-subtype-icon stacked-line-with-markers-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="lineMarkersStacked100" data-group="LineGroup"
                     data-bind="attr: { title: res.selectChartDialog.lineMarkersStacked100}">
                    <span class="chart-type-subtype-icon stacked100-line-with-markers-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="pie" data-group="PieGroup"
                     data-bind="attr: { title: res.selectChartDialog.pie}">
                    <span class="chart-type-subtype-icon pie-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="doughnut" data-group="PieGroup"
                     data-bind="attr: { title: res.selectChartDialog.doughnut}">
                    <span class="chart-type-subtype-icon doughnut-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="barClustered" data-group="BarGroup"
                     data-bind="attr: { title: res.selectChartDialog.barClustered}">
                    <span class="chart-type-subtype-icon clustered-bar-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="barStacked" data-group="BarGroup"
                     data-bind="attr: { title: res.selectChartDialog.barStacked}">
                    <span class="chart-type-subtype-icon stacked-bar-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="barStacked100" data-group="BarGroup"
                     data-bind="attr: { title: res.selectChartDialog.barStacked100}">
                    <span class="chart-type-subtype-icon stacked100-bar-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="area" data-group="AreaGroup"
                     data-bind="attr: { title: res.selectChartDialog.area}">
                    <span class="chart-type-subtype-icon area-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="areaStacked" data-group="AreaGroup"
                     data-bind="attr: { title: res.selectChartDialog.areaStacked}">
                    <span class="chart-type-subtype-icon stacked-area-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="areaStacked100" data-group="AreaGroup"
                     data-bind="attr: { title: res.selectChartDialog.areaStacked100}">
                    <span class="chart-type-subtype-icon stacked100-area-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="xyScatter" data-group="ScatterGroup"
                     data-bind="attr: { title: res.selectChartDialog.xyScatter}">
                    <span class="chart-type-subtype-icon scatter-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="xyScatterSmooth" data-group="ScatterGroup"
                     data-bind="attr: { title: res.selectChartDialog.xyScatterSmooth}">
                    <span class="chart-type-subtype-icon scatter-with-smooth-lines-and-markers-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="xyScatterSmoothNoMarkers"
                     data-group="ScatterGroup"
                     data-bind="attr: { title: res.selectChartDialog.xyScatterSmoothNoMarkers}">
                    <span class="chart-type-subtype-icon scatter-with-smooth-lines-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="xyScatterLines" data-group="ScatterGroup"
                     data-bind="attr: { title: res.selectChartDialog.xyScatterLines}">
                    <span class="chart-type-subtype-icon scatter-with-straight-lines-and-markers-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="xyScatterLinesNoMarkers"
                     data-group="ScatterGroup"
                     data-bind="attr: { title: res.selectChartDialog.xyScatterLinesNoMarkers}">
                    <span class="chart-type-subtype-icon scatter-with-straight-lines-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="bubble" data-group="ScatterGroup"
                     data-bind="attr: { title: res.selectChartDialog.bubble}">
                    <span class="chart-type-subtype-icon bubble-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="stockHLC" data-group="StockGroup"
                     data-bind="attr: { title: res.selectChartDialog.stockHLC}">
                    <span class="chart-type-subtype-icon high-low-close-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="stockOHLC" data-group="StockGroup"
                     data-bind="attr: { title: res.selectChartDialog.stockOHLC}">
                    <span class="chart-type-subtype-icon open-high-low-close-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="stockVHLC" data-group="StockGroup"
                     data-bind="attr: { title: res.selectChartDialog.stockVHLC}">
                    <span class="chart-type-subtype-icon volumn-high-low-close-stock-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="stockVOHLC" data-group="StockGroup"
                     data-bind="attr: { title: res.selectChartDialog.stockVOHLC}">
                    <span class="chart-type-subtype-icon volumn-open-high-low-close-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="columnClusteredAndLine" data-group="ComboGroup"
                     data-bind="attr: { title: res.selectChartDialog.columnClusteredAndLine}">
                    <span class="chart-type-subtype-icon column-clustered-and-line-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="columnClusteredAndLineOnSecondaryAxis"
                     data-group="ComboGroup"
                     data-bind="attr: { title: res.selectChartDialog.columnClusteredAndLineOnSecondaryAxis}">
                    <span class="chart-type-subtype-icon column-clustered-and-line-on-secondary-axis-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="stackedAreaAndColumnClustered"
                     data-group="ComboGroup"
                     data-bind="attr: { title: res.selectChartDialog.stackedAreaAndColumnClustered}">
                    <span class="chart-type-subtype-icon stacked-area-and-column-clustered-icon"></span>
                </div>
                <div class="select-chart-type-subtype-item" data-name="customCombination" data-group="ComboGroup"
                     data-bind="attr: { title: res.selectChartDialog.customCombination}">
                    <span class="chart-type-subtype-icon custom-combination-icon"></span>
                </div>
            </div>
            <div class="select-chart-type-preview">
                <div class="select-chart-type-description">
                    <span class="select-chart-type-title"></span>
                    <span class="select-chart-type-error-message"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="columnClustered">
                    <span class="chart-type-preview-icon clustered-column-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="columnClustered">
                    <span class="chart-type-preview-icon clustered-column-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="columnStacked">
                    <span class="chart-type-preview-icon stacked-column-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="columnStacked">
                    <span class="chart-type-preview-icon stacked-column-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="columnStacked100">
                    <span class="chart-type-preview-icon stacked100-column-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="columnStacked100">
                    <span class="chart-type-preview-icon stacked100-column-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="line">
                    <span class="chart-type-preview-icon line-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="line">
                    <span class="chart-type-preview-icon line-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="lineStacked">
                    <span class="chart-type-preview-icon stacked-line-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="lineStacked">
                    <span class="chart-type-preview-icon stacked-line-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="lineStacked100">
                    <span class="chart-type-preview-icon stacked100-line-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="lineStacked100">
                    <span class="chart-type-preview-icon stacked100-line-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="lineMarkers">
                    <span class="chart-type-preview-icon line-with-markers-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="lineMarkers">
                    <span class="chart-type-preview-icon line-with-markers-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="lineMarkersStacked">
                    <span class="chart-type-preview-icon stacked-with-markers-line-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="lineMarkersStacked">
                    <span class="chart-type-preview-icon stacked-with-markers-line-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="lineMarkersStacked100">
                    <span class="chart-type-preview-icon stacked100-line-with-markers-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="lineMarkersStacked100">
                    <span class="chart-type-preview-icon stacked100-line-with-markers-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="pie">
                    <span class="chart-type-preview-icon pie-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="doughnut">
                    <span class="chart-type-preview-icon doughnut-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="doughnut">
                    <span class="chart-type-preview-icon doughnut-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="barClustered">
                    <span class="chart-type-preview-icon bar-clustered-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="barClustered">
                    <span class="chart-type-preview-icon bar-clustered-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="barStacked">
                    <span class="chart-type-preview-icon bar-stacked-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="barStacked">
                    <span class="chart-type-preview-icon bar-stacked-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="barStacked100">
                    <span class="chart-type-preview-icon bar-stacked100-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="barStacked100">
                    <span class="chart-type-preview-icon bar-stacked100-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="area">
                    <span class="chart-type-preview-icon bar-area-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="area">
                    <span class="chart-type-preview-icon bar-area-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="areaStacked">
                    <span class="chart-type-preview-icon bar-area-stacked-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="areaStacked">
                    <span class="chart-type-preview-icon bar-area-stacked-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="areaStacked100">
                    <span class="chart-type-preview-icon bar-area-stacked100-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="areaStacked100">
                    <span class="chart-type-preview-icon bar-area-stacked100-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="xyScatter">
                    <span class="chart-type-preview-icon scatter-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="xyScatter">
                    <span class="chart-type-preview-icon scatter-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="xyScatterSmooth">
                    <span class="chart-type-preview-icon scatter-with-smooth-lines-and-markers-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="xyScatterSmooth">
                    <span class="chart-type-preview-icon scatter-with-smooth-lines-and-markers-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="xyScatterSmoothNoMarkers">
                    <span class="chart-type-preview-icon scatter-with-smooth-lines-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="xyScatterSmoothNoMarkers">
                    <span class="chart-type-preview-icon scatter-with-smooth-lines-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="xyScatterLines">
                    <span class="chart-type-preview-icon scatter-with-straight-lines-and-markers-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="xyScatterLines">
                    <span class="chart-type-preview-icon scatter-with-straight-lines-and-markers-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="xyScatterLinesNoMarkers">
                    <span class="chart-type-preview-icon scatter-with-straight-lines-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="xyScatterLinesNoMarkers">
                    <span class="chart-type-preview-icon scatter-with-straight-lines-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="bubble">
                    <span class="chart-type-preview-icon bubble-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="rows" data-group="bubble">
                    <span class="chart-type-preview-icon bubble-switched"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="stockOHLC">
                    <span class="chart-type-preview-icon open-high-low-close-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="stockHLC">
                    <span class="chart-type-preview-icon high-low-close-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="stockVHLC">
                    <span class="chart-type-preview-icon volumn-high-low-close-stock-default"></span>
                </div>
                <div class="select-chart-type-preview-item" data-name="columns" data-group="stockVOHLC">
                    <span class="chart-type-preview-icon volumn-open-high-low-close-default"></span>
                </div>
                <div class="select-chart-type-preview-item combo-preview-container" data-name="columns"
                     data-group="columnClusteredAndLine"
                     data-bind="attr: { title: res.selectChartDialog.columnClusteredAndLine}">
                    <div class="chart-preview-container">
                        <span class="chart-type-preview-icon"></span>
                    </div>
                </div>
                <div class="select-chart-type-preview-item combo-preview-container" data-name="columns"
                     data-group="columnClusteredAndLineOnSecondaryAxis"
                     data-bind="attr: { title: res.selectChartDialog.columnClusteredAndLine}">
                    <div class="chart-preview-container">
                        <span class="chart-type-preview-icon"></span>
                    </div>
                </div>
                <div class="select-chart-type-preview-item combo-preview-container" data-name="columns"
                     data-group="stackedAreaAndColumnClustered"
                     data-bind="attr: { title: res.selectChartDialog.columnClusteredAndLine}">
                    <div class="chart-preview-container">
                        <span class="chart-type-preview-icon"></span>
                    </div>
                </div>
                <div class="select-chart-type-preview-item combo-preview-container" data-name="columns"
                     data-group="customCombination"
                     data-bind="attr: { title: res.selectChartDialog.columnClusteredAndLine}">
                    <div class="chart-preview-container">
                        <span class="chart-type-preview-icon"></span>
                    </div>
                </div>
                <div class="series-container">
                    <span class="series-description" data-bind="text: res.selectChartDialog.seriesModifyDescription">Choose the chart type and axis for your data series:</span>
                    <div class="series-content">
                        <div class="series-contenty-title">
                                <span class="series-name" data-bind="text: res.selectChartDialog.seriesName">Series Name
                                </span>
                            <span class="series-chart-type" data-bind="text: res.selectChartDialog.chartType">Chart Type
                                </span>
                            <span class="series-secondary-axis" data-bind="text: res.selectChartDialog.secondaryAxis">Secondary Axis
                                </span>
                        </div>
                        <div class="series-content-items"></div>
                    </div>
                </div>
                <div class="series-chart-type-list-popup">
                    <div class="series-chart-type-list-container">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chart-select-data">
    <div class="chart-select-data-range-box">
        <span class="chart-select-data-range-desc"
              data-bind="text: res.selectData.changeDataRange">Chart data range:</span>
        <div class="rangeSelectContainer">
            <input type="text" class="chart-select-data-range-input"/>
            <div class="rangeSelectButton">
                <span></span>
            </div>
        </div>
    </div>
    <div class="chart-select-data-range-noShow-desc" data-bind="text: res.selectData.noDataRange">
        The data range is too complex to be display. If a new range is selected, it will replace all of the series in
        the Series panel.
    </div>
    <div class="chart-select-data-switch-box">
        <div class="chart-select-data-switch-box-left"></div>
        <a class="chart-select-data-switch-box-middle">
            <div class="chart-select-data-dialog-icon chart-select-data-switch-box-middle-img"></div>
            <div class="chart-select-data-switch-box-middle-text" data-bind="text: res.selectData.switchRowColumn">
                Switch Row/Column
            </div>
        </a>
        <div class="chart-select-data-switch-box-right"></div>
    </div>
    <div class="chart-select-data-option">
        <div class="chart-select-data-left-option">
            <div class="chart-select-data-option-desc" data-bind="text: res.selectData.legendEntries">Legend Entries
                (Series)
            </div>
            <div class="chart-select-data-option-part-box">
                <div class="chart-select-data-option-btn-box">
                    <a class="chart-select-data-option-one-btn-box" data-name="Add">
                        <div class="chart-select-data-option-btn-img add"></div>
                        <div class="chart-select-data-option-btn-text" data-bind="text: res.selectData.add">Add
                        </div>
                    </a>
                    <a class="chart-select-data-option-one-btn-box" data-name="Edit">
                        <div class="chart-select-data-option-btn-img edit"></div>
                        <div class="chart-select-data-option-btn-text" data-bind="text: res.selectData.edit">Edit
                        </div>
                    </a>
                    <a class="chart-select-data-option-one-btn-box" data-name="Remove">
                        <div class="chart-select-data-option-btn-img remove"></div>
                        <div class="chart-select-data-option-btn-text" data-bind="text: res.selectData.remove">Remove
                        </div>
                    </a>
                    <div class="chart-select-data-option-upDown-btn" title="Move Up" data-name="Up">
                        <div class="chart-select-data-option-upBtn-normal-trangle" id="upBtnTrangle"/>
                    </div>
                    <div class="chart-select-data-option-upDown-btn" title="Move Down" data-name="Down">
                        <div class="chart-select-data-option-downBtn-normal-trangle" id="downBtnTrangle"/>
                    </div>
                </div>
                <div class="chart-select-data-select-item-box" id="itemBox0">
                </div>
            </div>
        </div>
        <div class="chart-select-data-right-option">
            <div class="chart-select-data-option-desc" data-bind="text: res.selectData.horizontalAxisLabels">Horizontal
                (Category) Axis Labels
            </div>
            <div class="chart-select-data-option-part-box">
                <div class="chart-select-data-option-btn-box">
                    <a class="chart-select-data-option-one-btn-box" data-name="EditCategory">
                        <div class="chart-select-data-option-btn-img edit"></div>
                        <div class="chart-select-data-option-btn-text" data-bind="text: res.selectData.edit">Edit
                        </div>
                    </a>
                </div>
                <div class="chart-select-data-select-item-box" id="itemBox1">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chart-edit-series">
    <div data-bind="text: res.selectData.seriesName">Series name</div>
    <div class="rangeSelectContainer">
        <input id="name" type="text" class="chart-edit-Series-input"/>
        <div id="nameRangeSelectBtn" class="rangeSelectButton">
            <span></span>
        </div>
    </div>
    <div data-bind="text: res.selectData.seriesYValue">Series yValues</div>
    <div class="rangeSelectContainer">
        <input id="value" type="text" class="chart-edit-Series-input"/>
        <div id="valueRangeSelectBtn" class="rangeSelectButton">
            <span></span>
        </div>
    </div>
    <div data-bind="text: res.selectData.seriesXValue" id="xValueDesc">Series xValues</div>
    <div class="rangeSelectContainer" id='xValueContainer'>
        <input id="xValue" type="text" class="chart-edit-Series-input"/>
        <div id="xValueRangeSelectBtn" class="rangeSelectButton">
            <span></span>
        </div>
    </div>
    <div data-bind="text: res.selectData.seriesSize" id="sizeDesc">Series size</div>
    <div class="rangeSelectContainer" id='sizeContainer'>
        <input id="seriesSize" type="text" class="chart-edit-Series-input"/>
        <div id="sizeRangeSelectBtn" class="rangeSelectButton">
            <span></span>
        </div>
    </div>
</div>

<div class="move-chart-dialog">
    <div class="move-chart-dialog-description">Choose where you want the chart to be placed:</div>
    <div class="move-chart-dialog-option move-chart-dialog-to-new-sheet">
        <span class="move-chart-dialog-icon new-sheet"></span>
        <div class="move-chart-dialog-content">
            <div class="sheetType">
                <input type="radio" name="moveToSheetType" value="newSheet" class="move-chart-radio-button"
                       id="moveToNewSheet"/>
                <label for="moveToNewSheet">New sheet:</label>
            </div>
            <input type="text" class="chartSheetName" id="chartSheetName"/>
        </div>
    </div>
    <div class="move-chart-dialog-option move-chart-dialog-to-existing-sheet">
        <span class="move-chart-dialog-icon exist-sheet"></span>
        <div class="move-chart-dialog-content">
            <div class="sheetType">
                <input type="radio" name="moveToSheetType" value="existingSheets" class="move-chart-radio-button"
                       id="moveToExistingSheet"
                />
                <label for="moveToExistingSheet">Object in:</label>
            </div>
            <select name="existingSheetName" id="existingSheetName">
            </select>
        </div>
    </div>
</div>

