<?php

namespace demo\googlecharts;

use \koolreport\dashboard\Dashboard;

use \koolreport\dashboard\containers\Row;
use \koolreport\dashboard\containers\Panel;
use \koolreport\dashboard\widgets\Text;

class GoogleChartsBoard extends Dashboard
{
    protected function widgets()
    {
        return [
            Row::create([
                Panel::create()->header("<b>ColumnChart</b>")->width(1/2)->sub([
                    ColumnChartDemo::create()
                ]),
                Panel::create()->header("<b>BarChart</b>")->width(1/2)->sub([
                    BarChartDemo::create()
                ]),
            ]),
            Row::create([
                Panel::create()->header("<b>PieChart</b>")->width(1/2)->sub([
                    PieChartDemo::create()
                ]),
                Panel::create()->header("<b>DonutChart</b>")->width(1/2)->sub([
                    DonutChartDemo::create()
                ]),
            ]),

            Row::create([
                Panel::create()->header("<b>LineChart</b>")->width(1/2)->sub([
                    LineChartDemo::create()
                ]),
                Panel::create()->header("<b>GeoChart (AutoMaker's Sale Worldwide)</b>")->width(1/2)->sub([
                    GeoChartDemo::create()
                ]),
            ]),
    ];
    }
}