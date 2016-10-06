<div class="pageContent">
<div class="tabs" style="background: none;">
<form method="post" action="index.php?r=orders-material/create" class="pageForm required-validate" onsubmit="return validateCallback(this);">
<div class="pageFormContent" layoutH="55">
	<input type="hidden" value="ic" name="type">
	<p>
		<label>供应商：</label>
		<select name="supplier" class="combox required">
			<option value="">请选择</option>
			<option value="美耐斯">美耐斯</option>
			<option value="力侬">力侬</option>
			<option value="红富">红富</option>
			<option value="泰然">泰然</option>
			<option value="巴瑞德">巴瑞德</option>
			<option value="天电">天电</option>
			<option value="源磊">源磊</option>
			<option value="晶太">晶太</option>
		</select>
	</p>
	<p>
		<label>原料名称：</label>
		<select name="name" class="combox required">
			<option value="">请选择</option>
			<option value="IC-bcr450">IC-bcr450</option>
			<option value="IC-5415">IC-5415</option>
		</select>	
		
	</p>
	<p>
		<label>订单号：</label>
		<input name="order_no" value="G2G<?=date('Ymd');?>" type="text" size="30" />
	</p>
	<p>
		<label>单价：</label>
		<input name="unit_price" class="number required" type="text" size="30" />
	</p>
	
	<p>
		<label>数量：</label>
		<input name="number" class="digits required" type="text" size="30" />
	</p>
	
	<p>
		<label>规格：</label>
		<input name="spec" class="required" type="text" size="30" />
	</p>
	
	<p>
		<label>批次号：</label>
		<input class="required" name="batch_no" type="text" size="30" />
	</p>
	<p>
		<label>备注：</label>
		<textarea rows="5" cols="28" name="remark"></textarea>
	</p>
</div>
<div class="formBar">
	<ul>
		<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
		<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
		<li>
			<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
		</li>
	</ul>
</div>	
</form>
</div>
</div>