!function($) {
    "use strict";

    var ChartC3 = function() {};

    ChartC3.prototype.init = function () {
        //generating chart 
        //Pie Chart
        c3.generate({
             bindto: '#pie-venda',
            data: {
                columns: [
                    ['Sao Paulo', 308],
                    ['S J Campos', 550],
                    ['Campinas', 51],
                    ['Jundiai', 50],
                    ['Jacarei', 40]
                ],
                type : 'pie'
            },
            color: {
                pattern: ["#777777", "#0370c4","#ff0000", "#fff000", "#f0f5f5"]
            },
            pie: {
		        label: {
		          show: false
		        }
		    }
        });

    },
    $.ChartC3 = new ChartC3, $.ChartC3.Constructor = ChartC3

}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.ChartC3.init()
}(window.jQuery);