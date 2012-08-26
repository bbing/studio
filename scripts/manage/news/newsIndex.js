function reloadNews() {
	$("#list").datagrid("load", {
		title : $("#title").val(),
		begin : $("#begin").val(),
		end : $("#end").val()
	});
}
$(function() {
	$("#search").click(function() {
		reloadNews();
	})
	$("#list").datagrid({
		striped : true,
		idField : 'id',
		pagination : true,
		sortName : 'id',
		fitColumns : true,
		url : "/php/manage/news/initData/",
		frozenColumns : [ [ {
			field : "ck",
			checkbox : true
		} ] ],
		columns : [ [ {
			field : 'title',
			title : '标题',
			width : 200,
			sortable : true
		}, {
			field : "copyWriter",
			title : "撰稿人",
			width : 120,
			sortable : true
		}, {
			field : "createTime",
			title : "创建时间",
			width : 120,
			sortable : true
		} ] ],
		onSortColumn : function() {
			reloadNews();
		}
	})
})