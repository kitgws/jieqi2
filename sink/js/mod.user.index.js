 /**
 * $description	: �û�����ǩ������javascript����
 * 				: *��ҪjQuery֧��
 * $copyright	: shuhai@2015-01-14
 * $createtime	: 2015-01-14
 */
  function showDate(option) {
    this.obj = option.id;
  }
  //��ʼ��showDate
  showDate.prototype.init = function () {
    this.td = $("#"+this.obj+" .sel_date .data_table tbody td");
    //����ꡢ��
    this.showNow();
  }
  //����ꡢ��
  showDate.prototype.showNow = function () {
    var month = new Date().getMonth();
    //��䵱�µ���������
    this.showAllDay(month);
  }
  //��䵱�µ���������
  showDate.prototype.showAllDay = function (Mn) {
    var firstD = new Date();
    firstD.setFullYear(y, Mn, 1);
    //���µ�һ����һ���еڼ��죬0��������
    var firstDay = firstD.getDay();
    //�����ж�����,daycount�̳�user_index.html�е�js
    for(var j = 0; j < daycount; j++) {
    	//console.log(this.td[j+firstDay].innerHTML);
    	this.td[j + firstDay].innerHTML = j + 1;
    }
    //ɾ��������
    this.rmLastrow(daycount);
  }
  //ɾ��������
  showDate.prototype.rmLastrow = function(maxD){
  	var sRowIndex;
    $("tbody tr:gt(2) td").each(function(){
    	if($(this).html() == maxD) sRowIndex = $(this).parent()[0].sectionRowIndex;
    });
    $("tbody tr:gt("+sRowIndex+")").remove();
  }