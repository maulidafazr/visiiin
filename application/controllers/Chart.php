<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	}

	function grafik1()
		{
			{
				//1
				$chartData = file_get_contents('assets/jenis_ow.json');
				//echo $chartData;
				$chartData = json_decode($chartData);
				$res = array();
				foreach ($chartData as $row) {
					$dat=[$row->jenis,(double)$row->wisatawan];
					array_push($res, $dat);
				}
				//echo json_encode($res);
				$data['PieChartData'] = json_encode($res);
				$data['PieChartTitle'] = 'Obyek Wisata berdasarkan Jumlah wisatawan di Kabupaten Wonosobo';
				//$this->load->view('chart',$data);
			

			
				//2
				$chartData1 = file_get_contents('assets/obyekwisata.json');
				$chartData1= json_decode($chartData1);
				$res1 = array();
				foreach ($chartData1 as $row) {
					$dat1=[$row->obyek_wisata,(double)$row->jumlah];
						array_push($res1, $dat1);
					}
					//echo json_encode($res);
					$data['PieChartData1'] = json_encode($res1);
					$data['PieChartTitle1'] = 'Jumlah Obyek Wisata berdasarkan Kategori di Kabupaten Wonosobo';
					//$this->load->view('chart',$data1);
			

				//3
				$chartData2 = file_get_contents('assets/penginapan.json');
				$chartData2= json_decode($chartData2);
				$res2 = array();
				foreach ($chartData2 as $row) {
					$dat2=[$row->tahun,(double)$row->jumlah];
						array_push($res2, $dat2);
					}
					//echo json_encode($res);
					$data['ColumnChartData'] = json_encode($res2);
					$data['ColumnChartDataTitle'] = 'Jumlah Penginapan berdasarkan Tahun di Kabupaten Wonosobo';
					//$this->load->view('chart',$data2);

				//4
				$chartData3 = file_get_contents('assets/kamarisi.json');
				$chartData3= json_decode($chartData3);
				$res3 = array();
				foreach ($chartData3 as $row) {
					$dat3=[$row->tahun,(double)$row->jumlah];
						array_push($res3, $dat3);
					}
					//echo json_encode($res);
					$data['ColumnChartData1'] = json_encode($res3);
					$data['ColumnChartDataTitle1'] = 'Jumlah Kamar Penginapan yang Terisi berdasarkan Tahun di Kabupaten Wonosobo';
					//$this->load->view('chart',$data3);

				//5
				$chartData4 = file_get_contents('assets/wisatawan.json');
				$chartData4 = json_decode($chartData4);
				$res4 = array();
				foreach ($chartData4 as $row) {
					$dat4=[$row->Tahun,(double)$row->Domestik,(double)$row->Mancanegara];
						array_push($res4, $dat4);
					}
					//echo json_encode($res);
					$data['ColumnChartData2'] = json_encode($res4);
					$data['ColumnChartDataTitle2'] = 'Perbandingan Jumlah Wisatawan Domestik dan Mancanegara berdasarkan Tahun di Kabupaten Wonosobo';
					$this->load->view('chart',$data);
			}
			
		}
	
}
