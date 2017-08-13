<script type="text/javascript" src="<?php echo urldecode(Url::urlFormat("@static/js/daterangepicker/moment.min.js"));?>"></script>
<script type="text/javascript" src="<?php echo urldecode(Url::urlFormat("@static/js/daterangepicker/daterangepicker.js"));?>"></script>
<link rel="stylesheet" href="<?php echo urldecode(Url::urlFormat("@static/js/daterangepicker/daterangepicker.css"));?>" type="text/css" />
<script type="text/javascript">
$(document).ready(function() {
    $('#datepick').daterangepicker(
     {
        minDate: '2012-01-01',
        maxDate: moment(),
        dateLimit: { days: 60 },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
           '今天': [moment(), moment()],
           '昨天': [moment().subtract('days', 1), moment().subtract('days', 1)],
           '最近7天': [moment().subtract('days', 6), moment()],
           '最近30天': [moment().subtract('days', 29), moment()],
           '上一个月': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        },
        opens: 'right',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'YYYY-MM-DD',
        separator: ' -- ',
        locale: {
            weekLabel:'周',
            applyLabel: '提交',
            cancelLabel:'取消',
            fromLabel: '起始',
            toLabel: '结束',
            customRangeLabel: '选择时间段',
            daysOfWeek: ['日', '一', '二', '三', '四', '五','六'],
            monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            firstDay: 1
        }
     },
     function(start, end) {
      $('#reportrange span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
           FireEvent(document.getElementById('datepick'),'change');
     }
    );
    $('#reportrange span').html(moment().subtract('days', 29).format('YYYY-MM-DD') + ' - ' + moment().format('YYYY-MM-DD'));
    });
</script>
