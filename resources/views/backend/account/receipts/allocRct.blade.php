<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>RECEIPT</title>
		<link rel="stylesheet" href={{asset('backend/css/style.css')}}>
		<link rel="stylesheet" href={{asset('backend/css/vendors_css.css')}}>
		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
    
    
		<div class="invoice-box">
      <div style="text-align: center"><b>OFFICIAL RECEIPT #000{{$allocRct->id}}</b></div>
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="{{asset(app('cLogo'))}}" style="height: 150px; width:150px" />
								</td>

								<td>
									
									
									
								</td>
							</tr>
						</table>
					</td>
				</tr>
        

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									@if($details != null)
									<b>{{$details->name}}<br/></b>
									<b>{{$details->mobile}}<br/></b>
									<b>{{$details->phLocation}}<br/><br></b>
									@endif
									
                 <b>Payment Date: {{ date('d-M-Y', strtotime($allocRct->created_at)) }}<br /></b> 
								</td>

								<td>
									@if($allocRct->alloc != null)
										<b>{{$allocRct->alloc->client->name}}.<br /></b>
										<b>{{$allocRct->alloc->client->mobile}}<br /></b>
										<b>{{$allocRct->alloc->client->email}}</b>
									@else
									---
									@endif
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td>Reference</td>
				</tr>

				<tr class="details">
					<td>{{$allocRct->alloc->payMode}}</td>

					<td>{{$allocRct->alloc->reference}}</td>
				</tr>

				<tr class="heading">
				
					<td>Receipt Amount</td>
                    <td></td>
				</tr>
				
							<tr class="item">

							
								<td>{{$allocRct->amount}}</td>
                                <td></td>
							</tr>			
					


				<tr class="total">
					<td></td>
					<td>Total: {{$allocRct->amount}}</td>
				</tr>
			</table>
		</div>
		<div style="text-align: center; padding-top: 5px; ">
			<a href="" style="margin-right:4px;" class="btn btn-rounded btn-success mb-5">PRINT RECEIPT</a>
		</div>
	</body>
</html>
