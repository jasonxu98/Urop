
<!DOCTYPE HTML> 
<html>
<head>
<style>

</style>
</head>

<body>
<?php
    $src = $_POST["src"];
    $des = $_POST["des"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $epoch_start = strtotime($start_time);
    $epoch_end = strtotime($end_time);
    if ($src == 'perfsonar01.hep.wisc.edu') { $src = '144.92.180.75';}
    if ($src == 'ps-bandwidth.lhcmon.triumf.ca(ipv4)') { $src = '206.12.9.1';}
    if ($src == 'ps-bandwidth.lhcmon.triumf.ca(ipv6)') { $src = '2607:f8f0:660:2::2';}
    if ($src == 'perfsonar-lt.cern.ch') { $src = '128.142.223.247';}
    if ($src == 'ps-bandwidth.sfu.westgrid.ca') { $src = '206.12.24.250';}
    if ($src == 'perfsonar2.ihepa.ufl.edu') { $src = '128.227.221.45';}
    if ($src == 'perfsonar3.cc.kek.jp') { $src = '202.13.203.130';}
    if ($src == 'perfsonar01.hephy.oeaw.ac.at') { $src = '193.170.243.214';}
    if ($src == 'dmz-rtr-1-oc19-cms-rtr-1.mit.edu') { $src = '18.69.41.1';}
    if ($src == 'uofu-ddc-dmz-latency.chpc.utah.edu') { $src = '204.99.128.12';}
    if ($src == 'psmsu06.aglt2.org') { $src = '192.41.236.36';}
    if ($src == 'perfson1.ppgrid1.rhul.ac.uk') { $src = '134.219.225.13';}
    if ($src == 'psonar-cr3.rdf.ac.uk') { $src = '193.62.216.61';}
    if ($src == 'perfsonar02.ft.uam.es(ipv4)') { $src = '150.244.246.86';}
    if ($src == 'perfsonar02.ft.uam.es(ipv6)') { $src = '2001:720:420:c003::4';}
    if ($src == 'prfsnr-xrayb.xray.aps.anl.gov') { $src = '164.54.143.7';}
    if ($src == 'perfsonar1.roma1.infn.it') { $src = '141.108.35.17';}
    if ($src == 'ps-londhx1.ja.net(ipv4)') { $src = '194.83.97.209';}
    if ($src == 'ps-londhx1.ja.net(ipv6)') { $src = '2001:630:3c:f800::209';}
    if ($src == 'hep-ps-bw-fw.pp.rl.ac.uk') { $src = '130.246.43.241';}
    if ($src == 'mwt2-ps02.campuscluster.illinois.edu') { $src = '72.36.96.9';}
    if ($src == 'hcc-pki-ps01.unl.edu') { $src = '129.93.227.118';}
    if ($src == 'lcg-sonar01.hep.ucl.ac.uk') { $src = '128.40.4.25';}
    if ($src == 'perfsonar-bw.sprace.org.br') { $src = '200.136.80.19';}
    if ($src == 'perfsonar-1.t2.ucsd.edu') { $src = '169.228.130.41';}
    if ($src == 'ps-01.lnl.infn.it') { $src = '193.206.93.45';}
    if ($src == 'cloud-perfsonar.jinr.ru') { $src = '159.93.220.15';}
    if ($src == 'gridpp-ps-lat.ecdf.ed.ac.uk') { $src = '129.215.213.70';}
    if ($src == 'btw-bw.t1.grid.kiae.ru') { $src = '144.206.236.188';}
    if ($src == 'lhc-bandwidth.twgrid.org(ipv4)') { $src = '202.140.191.90';}
    if ($src == 'lhc-bandwidth.twgrid.org(ipv6)') { $src = '2400:4500::1:0:1e';}
    if ($src == 'lcgps02.gridpp.rl.ac.uk') { $src = '130.246.176.110';}
    if ($src == 'ps.ncp.edu.pk(ipv4)') { $src = '111.68.99.156';}
    if ($src == 'ps.ncp.edu.pk(ipv6)') { $src = '2400:fc00:8540:5000::156';}
    if ($src == 'iut2-net6.iu.edu') { $src = '149.165.225.2';}
    if ($src == 'perfsonar01.cmsaf.mit.edu') { $src = '18.12.1.171';}
    if ($src == 't2-pfsn1.jinr.ru(ipv4)') { $src = '159.93.225.210';}
    if ($src == 't2-pfsn1.jinr.ru(ipv6)') { $src = '2a05:81c5:302:224::e1d2';}
    if ($src == 'iut2-net2.iu.edu') { $src = '149.165.225.224';}
    if ($src == 'asgc-perfsonar.twgrid.org') { $src = '117.103.105.187';}
    if ($src == 'perfsonar-grid.uaic.ro') { $src = '85.122.31.119';}
    if ($src == 'psmp-gn-bw-01-lon-uk.geant.net') { $src = '62.40.106.131';}
    if ($src == 'perfsonar.diamond.ac.uk') { $src = '193.62.221.6';}
    if ($src == 'perfsonar.ihep.ac.cn(ipv4)') { $src = '202.122.32.166';}
    if ($src == 'perfsonar.ihep.ac.cn(ipv6)') { $src = '2401:de00::301';}
    if ($src == 'speedtest2.pnl.gov') { $src = '192.101.102.24';}
    if ($src == 'perfsonar-ps.ndgf.org') { $src = '109.105.124.86';}
    if ($src == 'pygrid-sonar1.lancs.ac.uk(ipv4)') { $src = '194.80.35.168';}
    if ($src == 'pygrid-sonar1.lancs.ac.uk(ipv6)') { $src = '2001:630:80:2fd::aa83:2196';}
    if ($src == 'ccperfsonar1.in2p3.fr') { $src = '193.48.99.77';}
    if ($src == 'perfsonar.na.infn.it(ipv4)') { $src = '90.147.67.253';}
    if ($src == 'perfsonar.na.infn.it(ipv6)') { $src = '2001:760:422a:137::253';}
    if ($src == 'psb01.pic.es(ipv4)') { $src = '193.109.172.187';}
    if ($src == 'psb01.pic.es(ipv6)') { $src = '2001:67c:1148:202::2';}
    if ($src == 'psific01.ific.uv.es') { $src = '147.156.116.40';}
    if ($src == 'llrpsonar2.in2p3.fr(ipv4)') { $src = '134.158.132.201';}
    if ($src == 'llrpsonar2.in2p3.fr(ipv6)') { $src = '2001:660:302c:23:134:158:132:201';}
    if ($src == 'ps-gsdc01.sdfarm.kr') { $src = '134.75.125.241';}
    if ($src == 'hv32.nubes.rl.ac.uk') { $src = '130.246.223.159';}
    if ($src == 'perfsonar-test2.kek.jp') { $src = '130.87.106.85';}
    if ($src == 'perfsonar2.ultralight.org') { $src = '192.84.86.122';}
    if ($src == 'psonar4.fnal.gov') { $src = '131.225.205.12';}
    if ($src == 'nor-ps.onenet.net') { $src = '164.58.16.54';}
    if ($src == 'perfsonar.ncsa.illinois.edu') { $src = '141.142.141.2';}
    if ($src == 'perfsonar2-grid.uaic.ro') { $src = '85.122.31.120';}
    if ($src == 'psonar3.fnal.gov') { $src = '131.225.205.23';}
    if ($src == 'lhcperfmon.bnl.gov(ipv4)') { $src = '192.12.15.26';}
    if ($src == 'lhcperfmon.bnl.gov(ipv6)') { $src = '2620:0:210:1::26';}
    if ($src == 'lcgps01.gridpp.rl.ac.uk') { $src = '130.246.176.109';}
    if ($src == 'lpnhe-psb.in2p3.fr(ipv4)') { $src = '134.158.159.86';}
    if ($src == 'lpnhe-psb.in2p3.fr(ipv6)') { $src = '2001:660:3036:197:134:158:159:86';}
    if ($src == 'btw-lat.grid.kiae.ru') { $src = '144.206.237.142';}
    if ($src == 'perfsonar1.cc.kek.jp') { $src = '202.13.203.128';}
    if ($src == 'perfsonar2.na.infn.it') { $src = '90.147.67.252';}
    if ($src == 'psb.hpc.utfsm.cl(ipv4)') { $src = '146.83.90.6';}
    if ($src == 'psb.hpc.utfsm.cl(ipv6)') { $src = '2001:1310:3121:1112::6';}
    if ($src == 'serv04.hep.phy.cam.ac.uk') { $src = '131.111.66.196';}
    if ($src == 'ps-latency.hep.pnnl.gov') { $src = '192.101.107.152';}
    if ($src == 'perfsonar-ow.cnaf.infn.it') { $src = '131.154.254.12';}
    if ($src == 'perfsonar2-de-kit.gridka.de') { $src = '192.108.47.12';}
    if ($src == 'sampaps02.if.usp.br') { $src = '200.17.30.136';}
    if ($src == 'btw-lat.t1.grid.kiae.ru') { $src = '144.206.236.189';}
    if ($src == 'nersc-pt1.es.net') { $src = '198.129.254.22';}
    if ($src == 'perfsonar-1.t2.ucsd.edu(ipv6)') { $src = '2607:f720:1700:1b30::29';}
    if ($src == 'pship02.csc.fi(ipv4)') { $src = '109.105.125.233';}
    if ($src == 'pship02.csc.fi(ipv6)') { $src = '2001:948:48:1::f502:1';}
    if ($src == 'owamp-scz.pnl.gov') { $src = '192.101.102.37';}
    if ($src == 'marperf02.in2p3.fr') { $src = '134.158.20.192';}
    if ($src == 'perfsonar-latency.esc.qmul.ac.uk') { $src = '194.36.11.38';}
    if ($src == 'perfsonar-lt.tier2.hep.manchester.ac.uk') { $src = '195.194.105.178';}
    if ($src == 'marperf01.in2p3.fr(ipv4)') { $src = '134.158.20.191';}
    if ($src == 'marperf01.in2p3.fr(ipv6)') { $src = '2001:660:5408:1:134:158:20:191';}
    if ($src == 'sampaps01.if.usp.br') { $src = '200.17.30.135';}
    if ($src == 'perfsonar-owamp.accre.vanderbilt.edu') { $src = '192.111.108.112';}
    if ($src == 'lhcmon.bnl.gov(ipv4)') { $src = '192.12.15.23';}
    if ($src == 'lhcmon.bnl.gov(ipv6)') { $src = '2620:0:210:1::23';}
    if ($src == 'psonar2.fnal.gov') { $src = '131.225.58.202';}
    if ($src == 'psonar-bwctl.brazos.tamu.edu') { $src = '165.91.55.6';}
    if ($src == 'perfsonar-2.t2.ucsd.edu') { $src = '169.228.130.40';}
    if ($src == 'ui01.lxfarm.mephi.ru') { $src = '85.143.115.59';}
    if ($src == 'perfsonar-bwctl.accre.vanderbilt.edu') { $src = '192.111.108.111';}
    if ($src == 'psum01.aglt2.org') { $src = '192.41.230.59';}
    if ($src == 'ps02-b.farm.particle.cz(ipv4)') { $src = '147.231.25.191';}
    if ($src == 'ps02-b.farm.particle.cz(ipv6)') { $src = '2001:718:401:6025:1::191';}
    if ($src == 'kv-core-ps-lhc-v4.uran.net.ua') { $src = '212.111.195.193';}
    if ($src == 'perfsonar.unl.edu(ipv4)') { $src = '129.93.5.165';}
    if ($src == 'perfsonar.unl.edu(ipv6)') { $src = '2600:900:0:3:92e2:baff:fe2b:9050';}
    if ($src == 'perfsonar4.cc.kek.jp') { $src = '202.13.203.131';}
    if ($src == 'cavy.ccamu.u-3mrs.fr') { $src = '193.51.217.95';}
    if ($src == 'de-hmb2-pstp01-mi1.nordu.net') { $src = '109.105.99.78';}
    if ($src == 'hcc-ps01.unl.edu(ipv4)') { $src = '129.93.183.249';}
    if ($src == 'hcc-ps01.unl.edu(ipv6)') { $src = '2600:900:6:1102:7a2b:cbff:fe68:a68c';}
    if ($src == 'perfsonar2.cc.kek.jp') { $src = '202.13.203.129';}
    if ($src == 'uct2-net2.mwt2.org') { $src = '192.170.227.162';}
    if ($src == 'hep-ps-bw-bp.pp.rl.ac.uk') { $src = '130.246.47.241';}
    if ($src == 'atlas-npt2.bu.edu') { $src = '192.5.207.252';}
    if ($src == 'lutps.lunet.edu') { $src = '164.58.29.118';}
    if ($src == 'ps-bandwidth.clumeq.mcgill.ca') { $src = '132.206.245.253';}
    if ($src == 'bost-pt1.es.net') { $src = '198.124.238.66';}
    if ($src == 'ps-bandwidth.hepnetcanada.ca') { $src = '206.12.154.59';}
    if ($src == 'perfsonar-ps-01.desy.de') { $src = '131.169.98.30';}
    if ($src == 'perfsonar-grid.uaic.ro(ipv6)') { $src = '2001:b30:1002:612::1119';}
    if ($src == 'bdw-uofc-cgy.cybera.ca') { $src = '199.116.233.125';}
    if ($src == 'alice14.spbu.ru') { $src = '195.19.226.144';}
    if ($src == 'anl-owamp.es.net') { $src = '198.124.252.97';}
    if ($src == 'psonartest1.fnal.gov(ipv4)') { $src = '131.225.2.46';}
    if ($src == 'psonartest1.fnal.gov(ipv6)') { $src = '2620:6a:0:2::2:46';}
    if ($src == '193.62.221.2.csirt.ja.net.gb') { $src = '193.62.221.2';}
    if ($src == 'perfsonar-cms1.itns.purdue.edu') { $src = '128.211.143.3';}
    if ($src == 'lcgps02.gridpp.rl.ac.uk(ipv6)') { $src = '2001:630:58:1820::82f6:b06e';}
    if ($src == 'ccperfsonar2.in2p3.fr') { $src = '193.48.99.76';}
    if ($src == 'fwu.edu.pk') { $src = '121.52.146.48';}
    if ($src == 'ps-bandwidth.atlas.unimelb.edu.au') { $src = '192.231.127.40';}
    if ($src == 'lcgs101.jinr.ru') { $src = '159.93.226.101';}
    if ($src == 'ps-bw.sciencedmz.ufpe.br') { $src = '150.161.116.2';}
    if ($src == 'ps-svl-10g.cenic.net') { $src = '137.164.28.121';}
    if ($src == 'ps.tacc.utexas.edu') { $src = '129.114.0.189';}
    if ($src == 'perfsonar-test3.kek.jp') { $src = '130.87.106.86';}
    if ($src == 'perfsonar02.hep.wisc.edu(ipv4)') { $src = '144.92.180.76';}
    if ($src == 'perfsonar02.hep.wisc.edu(ipv6)') { $src = '2607:f388:101c:1000::442';}
    if ($src == 'perfsonar-1850.frgp.net') { $src = '129.19.165.2';}
    if ($src == 'perfsonar-cms2.itns.purdue.edu') { $src = '128.211.143.4';}
    if ($src == 'lat-uofc-cgy.cybera.ca') { $src = '199.116.233.127';}
    if ($src == 'gridmsu2.sinp.msu.ru') { $src = '213.131.24.2';}
    if ($src == 'ps-lat.nersc.gov') { $src = '128.55.210.60';}
    if ($src == 'perfsonar-1g.ampath.net') { $src = '190.103.184.146';}
    if ($src == 'pygrid-sonar2.lancs.ac.uk') { $src = '194.80.35.169';}
    if ($src == 'speedy.greatplains.net') { $src = '164.113.255.2';}
    if ($src == 'perfsonar-test4.kek.jp') { $src = '130.87.106.103';}
    if ($src == 'ornl-owamp.es.net') { $src = '198.124.238.85';}
    if ($src == 'perfsonar-de-kit.gridka.de(ipv4)') { $src = '192.108.47.6';}
    if ($src == 'perfsonar-de-kit.gridka.de(ipv6)') { $src = '2a00:139c:5:4102::6';}
    if ($src == 'iut2-net8.iu.edu') { $src = '149.165.225.4';}
    if ($src == 'psmp-lhc-bw-01-ams-nl-v4.geant.net') { $src = '62.40.126.163';}
    if ($src == 'ps2.ast.cam.ac.uk') { $src = '131.111.68.201';}
    if ($src == 'psmsu02.aglt2.org') { $src = '192.41.236.32';}
    if ($src == 'perfsonar2.nubes.rl.ac.uk') { $src = '130.246.210.61';}
    if ($src == 'ccperfsonar1.in2p3.fr(ipv6)') { $src = '2001:660:5009:9:193:48:99:77';}
    if ($src == 'perfsonar.oshean.org') { $src = '198.7.237.18';}
    if ($src == 'lbl-owamp.es.net') { $src = '198.129.252.142';}
    if ($src == 'ps-bryant-lt.perfsonar.kanren.net(ipv6)') { $src = '2001:49d0:23c0:6::49';}
    if ($src == 'pfs1.renu.ac.ug(ipv4)') { $src = '196.43.191.10';}
    if ($src == 'pfs1.renu.ac.ug(ipv6)') { $src = '2c0f:f6d0::2b';}
    if ($src == 'perfsonar01.goegrid.gwdg.de') { $src = '134.76.97.128';}
    if ($src == 'uct2-net4.mwt2.org') { $src = '192.170.227.164';}
    if ($src == 'perfson2.zeuthen.desy.de') { $src = '141.34.200.29';}
    if ($src == 'hpc-f01.u-strasbg.fr') { $src = '130.79.249.221';}
    if ($src == 'perfsonar.ornl.gov(ipv6)') { $src = '2620:0:2b30:b::2';}
    if ($src == 'ps-latency.clumeq.mcgill.ca') { $src = '132.206.245.252';}
    if ($src == 'perfsonar02.hephy.oeaw.ac.at') { $src = '193.170.243.215';}
    if ($src == 'em-1.test.manlan.internet2.edu') { $src = '64.57.25.211';}
    if ($src == 'psum02.aglt2.org(ipv4)') { $src = '192.41.230.60';}
    if ($src == 'psum02.aglt2.org(ipv6)') { $src = '2001:48a8:68f7:1::60';}
    if ($src == 'slac-owamp.es.net') { $src = '198.129.254.146';}
    if ($src == 'ps-latency.hepnetcanada.ca') { $src = '206.12.154.60';}
    if ($src == 'psum01.itep.ru') { $src = '194.85.69.74';}
    if ($src == 'ps.lhcopn-ps.surfsara.nl(ipv4)') { $src = '145.100.17.9';}
    if ($src == 'ps.lhcopn-ps.surfsara.nl(ipv6)') { $src = '2001:610:108:3017::9';}
    if ($src == 'prfsnr-xraya.xray.aps.anl.gov') { $src = '164.54.143.6';}
    if ($src == 'btw-bw.grid.kiae.ru') { $src = '144.206.237.141';}
    if ($src == 'ps-latency.atlas.unimelb.edu.au') { $src = '192.231.127.41';}
    if ($src == 'perfsonar.nersc.gov') { $src = '128.55.199.18';}
    if ($src == 'perfsonar-sg.noc.tein3.net') { $src = '202.179.252.18';}
    if ($src == 'ps0002.m45.ihep.su') { $src = '194.190.165.192';}
    if ($src == 'perfsonar.npidev.psu.edu') { $src = '146.186.219.6';}
    if ($src == 'iut2-net4.iu.edu') { $src = '149.165.224.248';}
    if ($src == 'psmp-lhc-bw-01-par-fr-v4.geant.net') { $src = '62.40.126.195';}
    if ($src == 'pfs3.icecube.wisc.edu') { $src = '128.104.255.237';}
    if ($src == 'perfsonar2-b240.chtc.wisc.edu') { $src = '128.104.55.253';}
    if ($src == 'lhcone-star-opt1.es.net') { $src = '198.124.80.197';}
    if ($src == 'mcln-ps.maxgigapop.net') { $src = '206.196.178.77';}
    if ($src == 'psmp-gn-bw-01-buc-ro.geant.net') { $src = '62.40.106.195';}
    if ($src == 'llrpsonar1.in2p3.fr') { $src = '134.158.132.200';}
    if ($src == 'bwctl-10g-ps.singaren.net.sg(ipv4)') { $src = '203.30.39.13';}
    if ($src == 'bwctl-10g-ps.singaren.net.sg(ipv6)') { $src = '2001:df0:21a:0:f6e9:d4ff:fea4:6432';}
    if ($src == 'Vm83.nubes.stfc.ac.uk') { $src = '130.246.221.24';}
    if ($src == 'm-cssc-b380-12.net.wisc.edu(ipv6)') { $src = '2607:f388:d:100::221';}
    if ($src == 'perfsonar1.nubes.rl.ac.uk') { $src = '130.246.210.60';}
    if ($src == 'et-3-1-0.2001.rtsw.newy32aoa.net.internet2.edu') { $src = '64.57.30.225';}
    if ($src == 'atrogr009.nipne.ro') { $src = '81.180.86.41';}
    if ($src == 'lhcone.test.wix.internet2.edu') { $src = '64.57.30.149';}
    if ($src == 'lhcone.test.manlan.internet2.edu') { $src = '64.57.30.143';}
    if ($src == 't2ps-latency.physics.ox.ac.uk') { $src = '163.1.5.210';}
    if ($src == 'lhcone-wash-opt1.es.net') { $src = '198.124.80.201';}
    if ($src == 'perfsonar02.cmsaf.mit.edu') { $src = '18.12.1.172';}
    if ($src == 'cld-ps.jinr.ru') { $src = '159.93.36.5';}
    if ($src == 'ps-cms.rcac.purdue.edu') { $src = '128.211.136.82';}
    if ($src == 'psmp-lhc-bw-01-lon-uk-v4.geant.net') { $src = '62.40.126.193';}
    if ($src == 'perfsonar1.ba.infn.it') { $src = '90.147.66.50';}
    if ($src == 'psmsu01.aglt2.org') { $src = '192.41.236.31';}
    if ($src == 'sbgperfps2.in2p3.fr') { $src = '134.158.150.46';}
    if ($src == 'psum06.aglt2.org') { $src = '192.41.230.62';}
    if ($src == 'perfsonar-b5-data.soton.ac.uk') { $src = '152.78.176.16';}
    if ($src == 'psuta01.atlas-swt2.org') { $src = '129.107.255.29';}
    if ($src == 'psmp-lhc-bw-01-gen-ch-v4.geant.net') { $src = '62.40.126.189';}
    if ($src == 'lapp-ps01.in2p3.fr(ipv4)') { $src = '134.158.84.140';}
    if ($src == 'lapp-ps01.in2p3.fr(ipv6)') { $src = '2001:660:5310:7::103:9';}
    if ($src == 'cs-perfsonar-2.cs.wisc.edu') { $src = '128.105.214.226';}
    if ($src == 'psbud02.kfki.hu') { $src = '148.6.8.252';}
    if ($src == 'perfsonar1.nipne.ro') { $src = '81.180.86.62';}
    if ($src == 'perfsonar-test1.kek.jp') { $src = '130.87.105.175';}
    if ($src == 't1-pfsn1.jinr-t1.ru(ipv4)') { $src = '159.93.229.150';}
    if ($src == 't1-pfsn1.jinr-t1.ru(ipv6)') { $src = '2a05:81c5:301:228::e596';}
    if ($src == 'kv-core-ps-v4.uran.net.ua') { $src = '212.111.192.62';}
    if ($src == 'ps01-extrtr3.mit.edu') { $src = '18.8.81.11';}
    if ($src == 'chic-pt1.es.net') { $src = '198.124.252.141';}
    if ($src == '56m-ps.sox.net(ipv6)') { $src = '2607:f7b8:eeee:eeee:260:ddff:fe44:a2e6';}
    if ($src == 'ps-small.dev.ja.net') { $src = '212.219.210.222';}
    if ($src == 'perfsonar02-iep-grid.saske.sk') { $src = '147.213.204.112';}
    if ($src == 'netmon2.atlas-swt2.org') { $src = '129.107.255.27';}
    if ($src == 'ps-core-a.rcac.purdue.edu') { $src = '128.211.136.70';}
    if ($src == 'kc-core-psr.mo.more.net') { $src = '150.199.7.246';}
    if ($src == 'lhcone-newy-opt1.es.net') { $src = '198.124.80.193';}
    if ($src == 'ps2.truba.gov.tr') { $src = '193.140.100.130';}
    if ($src == 'ps-border1-owamp.lbl.gov(ipv6)') { $src = '2620:83:8000:ff23::a';}
    if ($src == 'ny32-rtr-1.mit.edu') { $src = '18.127.255.34';}
    if ($src == 'perfsonar-msn.wiscnet.net(ipv6)') { $src = '2001:4e0:1:8::10';}
    if ($src == 'psfrascati02.lnf.infn.it') { $src = '192.84.128.112';}
    if ($src == 'ps01-nl.geant.net') { $src = '62.40.126.129';}
    if ($src == 'ulak-bwctl.ulakbim.gov.tr') { $src = '193.140.12.242';}
    if ($src == 'slac-pt1.es.net') { $src = '198.129.254.134';}
    if ($src == 'ps01.cat.cbpf.br') { $src = '152.84.101.141';}
    if ($src == 'perfsonar02.lcg.cscs.ch') { $src = '148.187.64.26';}
    if ($src == 'perfsonar01.lcg.cscs.ch') { $src = '148.187.64.25';}
    if ($src == '210.25.189.178.scut.edu.cn') { $src = '210.25.189.178';}
    if ($src == '202.38.129.247.cnnic.cn') { $src = '202.38.129.247';}
    if ($src == 'titus-vm7.zeuthen.desy.de') { $src = '141.34.252.13';}
    if ($src == 'sonar1.itim-cj.ro') { $src = '193.231.25.238';}
    if ($src == 'perfsonar-hk.noc.tein3.net') { $src = '202.179.246.18';}
    if ($src == 'punditdev3.aglt2.org') { $src = '192.41.231.115';}
    if ($src == 'ps02.cat.cbpf.br') { $src = '152.84.101.142';}
    if ($src == 'psonar1.fnal.gov') { $src = '131.225.205.139';}
    if ($src == 'atrogr007.nipne.ro') { $src = '81.180.86.38';}
    if ($src == 'sbgperfps1.in2p3.fr') { $src = '134.158.150.245';}
    if ($src == 'lutps1.lunet.edu') { $src = '164.58.29.121';}
    if ($src == 'ps-gsdc02.sdfarm.kr(ipv4)') { $src = '134.75.125.242';}
    if ($src == 'ps-gsdc02.sdfarm.kr(ipv6)') { $src = '2001:320:15:125:134:75:125:242';}
    if ($src == 'perfsonar.ucar.edu') { $src = '128.117.132.12';}
    if ($src == 'perfsonar-dev.grnoc.iu.edu') { $src = '140.182.49.103';}
    if ($src == 'psonar2.lal.in2p3.fr') { $src = '134.158.73.244';}
    if ($src == 'psuta02.atlas-swt2.org') { $src = '129.107.255.30';}
    if ($src == 't1-pfsn2.jinr-t1.ru') { $src = '159.93.229.151';}
    if ($src == 'ps.test.wix.internet2.edu') { $src = '198.71.45.226';}
    if ($src == 'ps-deb-2.es.net') { $src = '198.128.151.30';}
    if ($src == 'perfsonar-ext.soton.ac.uk') { $src = '152.78.1.2';}
    if ($src == 'lhcb-perf.nipne.ro') { $src = '81.180.86.184';}
    if ($src == 'test-pt1.es.net') { $src = '198.129.254.10';}
    if ($src == 'psmp-lhc-bw-01-fra-de-v4.geant.net') { $src = '62.40.126.171';}
    if ($src == 't3serv015.mit.edu') { $src = '18.77.2.125';}
    if ($src == 'ps02-extrtr3.mit.edu') { $src = '18.8.81.12';}
    if ($src == 'perfsonar1.icepp.jp') { $src = '157.82.112.68';}
    if ($src == 'ps-border2-owamp-v4.lbl.gov') { $src = '128.3.127.4';}
    if ($src == 'perfsonar2.cc.uh.edu') { $src = '129.7.131.250';}
    if ($src == 'grid-perf1.physik.rwth-aachen.de') { $src = '134.61.24.193';}
    if ($src == 'merlin.ucsd.edu') { $src = '132.239.252.70';}
    if ($src == 'ps-deb.es.net') { $src = '198.128.151.15';}
    if ($src == 'lcgnetmon.phy.bris.ac.uk') { $src = '137.222.74.15';}
    if ($src == 'perfsonar-ps-bandwidth.igfae.usc.es') { $src = '193.144.80.13';}
    if ($src == 'lpsc-perfsonar.in2p3.fr') { $src = '193.48.83.97';}
    if ($src == 'clrperf-owamp.in2p3.fr') { $src = '134.158.123.183';}
    if ($src == 'antg-staging.es.net') { $src = '198.128.151.25';}
    if ($src == 'hepsonar2.ph.liv.ac.uk') { $src = '138.253.60.82';}
    if ($src == 'perfsonar1.mi.infn.it') { $src = '192.135.14.32';}
    if ($src == 'perflat.ciemat.es') { $src = '192.101.161.186';}
    if ($src == 'psfrascati01.lnf.infn.it') { $src = '192.84.128.111';}
    if ($src == 'psnr-farm04.slac.stanford.edu') { $src = '134.79.118.8';}
    if ($src == 'ps-02.lnl.infn.it') { $src = '193.206.93.57';}
    if ($src == 'perfsonar01.ft.uam.es') { $src = '150.244.246.85';}
    if ($src == 'llnl-pt1.es.net') { $src = '198.129.254.106';}
    if ($src == 'ps01.hepl.hiroshima-u.ac.jp') { $src = '202.13.220.154';}
    if ($src == 'bdw-uofa-edm.cybera.ca') { $src = '199.116.233.121';}
    if ($src == 'uct2-net1.mwt2.org') { $src = '192.170.227.160';}
    if ($src == 'ps01.bfg.uni-freiburg.de') { $src = '132.230.202.235';}
    if ($src == 'perfsonar-storrs.cen.ct.gov(ipv6)') { $src = '2607:f460:a001:13::2';}
    if ($src == 'ornl-pt1.es.net') { $src = '198.124.238.154';}
    if ($src == 'lat-uofa-edm.cybera.ca') { $src = '199.116.233.123';}
    if ($src == 'ps-development.bnl.gov') { $src = '192.12.15.111';}
    if ($src == 'psifca02.ifca.es') { $src = '193.146.75.139';}
    if ($src == 'typhoon.pub.alcf.anl.gov') { $src = '140.221.68.2';}
    if ($src == 'ps-bryant-bw.perfsonar.kanren.net(ipv6)') { $src = '2001:49d0:23c0:1::10';}
    if ($src == 'perfbw.ciemat.es') { $src = '192.101.161.185';}
    if ($src == 'pinger.cern.ch') { $src = '192.91.244.6';}
    if ($src == 'psum02.itep.ru') { $src = '194.85.69.75';}
    if ($src == 'ps01.iihe.ac.be') { $src = '193.58.172.56';}
    if ($src == 'pfs2.renu.ac.ug(ipv4)') { $src = '196.43.190.22';}
    if ($src == 'pfs2.renu.ac.ug(ipv6)') { $src = '2c0f:f6d0::29';}
    if ($src == 'perfsonar.ix.ui-iccn.org') { $src = '72.36.126.132';}
    if ($src == 'lcg-bw.sfu.computecanada.ca') { $src = '206.12.127.40';}
    if ($src == 'perfsonar2.pi.infn.it') { $src = '193.205.76.77';}
    if ($src == 'psific02.ific.uv.es') { $src = '147.156.116.41';}
    if ($src == 'perfsonar-ps.cnaf.infn.it') { $src = '131.154.254.11';}
    if ($src == 'perfsonar-lsu-frey-02.loni.org') { $src = '208.100.125.98';}
    if ($src == 'psonar-owamp.brazos.tamu.edu') { $src = '165.91.55.4';}
    if ($src == 'grid00.hepl.hiroshima-u.ac.jp') { $src = '202.13.220.40';}
    if ($src == 'perfsonar2.nipne.ro') { $src = '81.180.86.64';}
    if ($src == 'elpa-pt1.es.net') { $src = '198.129.254.82';}
    if ($src == 'heplnx129.pp.rl.ac.uk') { $src = '130.246.47.129';}
    if ($src == 'pship01.csc.fi') { $src = '109.105.125.232';}
    if ($src == 'lns-dmz-rtr-2.mit.edu') { $src = '18.4.2.1';}
    if ($src == 'perfsonar2.ba.infn.it') { $src = '90.147.66.58';}
    if ($src == 'psl.hpc.utfsm.cl') { $src = '146.83.90.7';}
    if ($src == 'perfsonar1.ihepa.ufl.edu') { $src = '128.227.221.44';}
    if ($src == 't2-pfsn2.jinr.ru') { $src = '159.93.225.211';}
    if ($src == 'nettest.lbl.gov') { $src = '131.243.24.11';}
    if ($src == 'psum09.cc.gt.atl.ga.us') { $src = '143.215.129.69';}
    if ($src == 'etn-ps.onenet.net') { $src = '164.58.16.78';}
    if ($src == 'perfsonar3.icepp.jp') { $src = '157.82.112.70';}
    if ($src == 'ps-latency.scinet.utoronto.ca') { $src = '142.150.19.61';}
    if ($src == 'atlas-npt1.bu.edu') { $src = '192.5.207.251';}
    if ($src == '111.68.99.142.ncp.edu.pk') { $src = '111.68.99.142';}
    if ($src == 'clrperf-bwctl.in2p3.fr') { $src = '134.158.123.184';}
    if ($src == 'psonar7.fnal.gov') { $src = '131.225.69.47';}
    if ($src == 'psonar-cr2.rdf.ac.uk') { $src = '193.62.216.6';}
    if ($src == 'perfsonar1.ccs.ornl.gov') { $src = '128.219.141.58';}
    if ($src == 'ps-bandwidth.atlas.ualberta.ca') { $src = '142.244.105.67';}
    if ($src == 'psonar5.deemz.net') { $src = '198.49.208.18';}
    if ($src == 'iut2-net1.iu.edu') { $src = '149.165.225.223';}
    if ($src == 'lpnhe-psl.in2p3.fr') { $src = '134.158.159.85';}
    if ($src == 'lcgperfsonar.dnp.fmph.uniba.sk') { $src = '158.195.14.3';}
    if ($src == 'ps2.ochep.ou.edu') { $src = '129.15.40.232';}
    if ($src == 'perfsonar1.cc.uh.edu') { $src = '129.7.254.195';}
    if ($src == 'perfsonar.ultralight.org') { $src = '192.84.86.121';}
    if ($src == 'lcgnetmon02.phy.bris.ac.uk') { $src = '137.222.74.17';}
    if ($src == 'star-pt1.es.net') { $src = '198.124.252.121';}
    if ($src == 'perfsonar-bw.cern.ch(ipv4)') { $src = '128.142.223.246';}
    if ($src == 'perfsonar-bw.cern.ch(ipv6)') { $src = '2001:1458:301:a7bc::100:14';}
    if ($src == 'owamp.chic.net.internet2.edu') { $src = '64.57.17.34';}
    if ($src == 'grid-perf2.physik.rwth-aachen.de') { $src = '134.61.24.194';}
    if ($src == 'ps02.iihe.ac.be(ipv4)') { $src = '193.58.172.57';}
    if ($src == 'ps02.iihe.ac.be(ipv6)') { $src = '2001:6a8:1080::16';}
    if ($src == 'clpk-ps.maxgigapop.net(ipv6)') { $src = '2001:468:c00:9:2e0:81ff:fe70:2a2';}
    if ($src == 'epgperf.ph.bham.ac.uk') { $src = '193.62.56.9';}
    if ($src == 'tul-ps.onenet.net') { $src = '164.58.16.74';}
    if ($src == 'web100.pnw-gigapop.net(ipv6)') { $src = '2001:1860:118::1';}
    if ($src == 'hepsonar1.ph.liv.ac.uk(ipv4)') { $src = '138.253.60.81';}
    if ($src == 'hepsonar1.ph.liv.ac.uk(ipv6)') { $src = '2001:630:21:8d80::8afd:3c51';}
    if ($src == 'perfsonar-bandwidth.esc.qmul.ac.uk(ipv4)') { $src = '194.36.11.37';}
    if ($src == 'perfsonar-bandwidth.esc.qmul.ac.uk(ipv6)') { $src = '2a01:56c0:4033::25';}
    if ($src == 'psl-bw.ncsa.illinois.edu') { $src = '141.142.176.3';}
    if ($src == 'psbud01.kfki.hu') { $src = '148.6.8.251';}
    if ($src == 'ndojima-nms-2.ps.jgn-x.jp') { $src = '202.180.38.90';}
    if ($src == 'ps-ksu-bw.perfsonar.kanren.net(ipv6)') { $src = '2001:49d0:23c0:3::26';}
    if ($src == 'perfsonar02.datagrid.cea.fr(ipv4)') { $src = '192.54.207.251';}
    if ($src == 'perfsonar02.datagrid.cea.fr(ipv6)') { $src = '2001:660:3031:110:ffff::222';}
    if ($src == '210.25.189.58.cernet.edu.cn') { $src = '210.25.189.58';}
    if ($src == 'lhcb-perf.nipne.ro') { $src = '127.0.0.1';}
    if ($src == 't2ps-bandwidth.physics.ox.ac.uk(ipv4)') { $src = '163.1.5.211';}
    if ($src == 't2ps-bandwidth.physics.ox.ac.uk(ipv6)') { $src = '2001:630:441:905::d3';}
    if ($src == 'hep-sonar.ecm.ub.es') { $src = '161.116.81.235';}
    if ($src == 'lcgperfradar.dnp.fmph.uniba.sk') { $src = '158.195.14.26';}
    if ($src == 'perfsonar-02.discovery.wisc.edu(ipv6)') { $src = '2607:f388:107c:502::b';}
    if ($src == 'perfsonar2.mi.infn.it(ipv4)') { $src = '192.135.14.39';}
    if ($src == 'perfsonar2.mi.infn.it(ipv6)') { $src = '2001:760:4224:1::39';}
    if ($src == 'ps.3rox.net(ipv6)') { $src = '2001:5e8:0:1002::2';}
    if ($src == 'ps1-akard-dlls.tx-learn.net') { $src = '74.200.187.90';}
    if ($src == 'srv.ll.indiana.gigapop.net') { $src = '149.165.134.4';}
    if ($src == 'perfsonar01-iep-grid.saske.sk(ipv4)') { $src = '147.213.204.111';}
    if ($src == 'perfsonar01-iep-grid.saske.sk(ipv6)') { $src = '2001:4118:900:cc00::111';}
    if ($src == 'ps0001.m45.ihep.su') { $src = '194.190.165.191';}
    if ($src == 'psnr-farm10.slac.stanford.edu') { $src = '134.79.118.72';}
    if ($src == 'tech-ps.hep.technion.ac.il') { $src = '192.114.101.125';}
    if ($src == 'perfsonar01.jc.rl.ac.uk') { $src = '130.246.128.242';}
    if ($src == 'lapp-ps02.in2p3.fr') { $src = '134.158.84.141';}
    if ($src == 'gridpp-ps-band.ecdf.ed.ac.uk(ipv4)') { $src = '129.215.213.69';}
    if ($src == 'gridpp-ps-band.ecdf.ed.ac.uk(ipv6)') { $src = '2001:630:3c1:638::d545';}
    if ($src == 'grid-perfsonar.hpc.susx.ac.uk') { $src = '139.184.80.18';}
    if ($src == 'ps01.gridc.lip.pt') { $src = '193.137.227.9';}
    if ($src == 'ps-bandwidth.scinet.utoronto.ca') { $src = '142.150.19.60';}
    if ($src == 'heplnx130.pp.rl.ac.uk') { $src = '130.246.47.130';}
    if ($src == 'external-rtr-3-dmz-rtr-1.mit.edu') { $src = '18.69.7.2';}
    if ($src == 'perfsonar-ps-02.desy.de(ipv4)') { $src = '131.169.98.29';}
    if ($src == 'perfsonar-ps-02.desy.de(ipv6)') { $src = '2001:638:700:1062::1:1d';}
    if ($src == 'ps2.kipt.kharkov.ua(ipv4)') { $src = '193.239.180.213';}
    if ($src == 'ps2.kipt.kharkov.ua(ipv6)') { $src = '2a00:fc00:e009::213';}
    if ($src == 'perfmon.dur.scotgrid.ac.uk(ipv4)') { $src = '193.60.193.3';}
    if ($src == 'perfmon.dur.scotgrid.ac.uk(ipv6)') { $src = '2001:630:a5:1200::a:3';}
    if ($src == 'hcc-ps02.unl.edu(ipv4)') { $src = '129.93.239.163';}
    if ($src == 'hcc-ps02.unl.edu(ipv6)') { $src = '2600:900:6:1101:21b:21ff:fe96:a3d4';}
    if ($src == 'komatsu.chtc.wisc.edu') { $src = '144.92.20.110';}
    if ($src == 'perfsonar2.icepp.jp') { $src = '157.82.112.69';}
    if ($src == 'perfsonar.ansp.br') { $src = '200.136.32.2';}
    if ($src == 'psifca01.ifca.es') { $src = '193.146.75.138';}
    if ($src == 'perfsonar-bw.tier2.hep.manchester.ac.uk(ipv4)') { $src = '195.194.105.177';}
    if ($src == 'perfsonar-bw.tier2.hep.manchester.ac.uk(ipv6)') { $src = '2001:630:22:1004:800:ff:fe00:27';}
    if ($src == 'perfsonar1.iitg.ac.in') { $src = '14.139.196.60';}
    if ($src == 'ps001.gla.scotgrid.ac.uk') { $src = '130.209.239.123';}
    if ($src == 'lhc-latency.twgrid.org') { $src = '117.103.105.191';}
    if ($src == 'ps1-hardy-hstn.tx-learn.net') { $src = '74.200.187.98';}
    if ($src == 'perfsonar-ps2.ndgf.org(ipv4)') { $src = '109.105.124.88';}
    if ($src == 'perfsonar-ps2.ndgf.org(ipv6)') { $src = '2001:948:40:3::88';}
    if ($src == 'psnr-bw01.slac.stanford.edu') { $src = '134.79.104.209';}
    if ($src == 'lcg-psbw.uw.computecanada.ca') { $src = '199.241.165.67';}
    if ($src == 'perfsonar.pleiades.uni-wuppertal.de') { $src = '132.195.125.213';}
    if ($src == 'mercury-2.lsr.nectec.or.th') { $src = '203.185.96.101';}
    if ($src == 'mwt2-ps01.campuscluster.illinois.edu') { $src = '72.36.96.4';}
    if ($src == '146.97.41.58.csirt.ja.net.gb') { $src = '146.97.41.58';}
    if ($src == '172.16.14.238.iana.org.us') { $src = '172.16.14.238';}
    if ($src == 'ps-bandwidth.hep.pnnl.gov') { $src = '192.101.107.151';}
    if ($src == 'perfsonar.pnpi.nw.ru') { $src = '212.193.96.29';}
    if ($src == '202.179.246.10.net.edu.cn') { $src = '202.179.246.10';}
    if ($src == '210.25.189.166.cernet.edu.cn') { $src = '210.25.189.166';}
    if ($src == '210.25.189.166.cernet.edu.cn') { $src = '210.25.189.166';}

    ?>

<h1> Your input </h1>
Source: <?php echo $src; ?><br>
Destination: <?php echo $des; ?><br>
Start time: <?php echo $_POST["start_time"]; ?>(epoch:<?php echo strtotime($_POST["start_time"]); ?>)<br>
End time: <?php echo $_POST["end_time"]; ?>(epoch:<?php echo strtotime($_POST["end_time"]); ?>)<br><br>


<h2> The output</h2><br>




<?php

echo "Hello<br>";
$host        = "t3pers13.physics.lsa.umich.edu";
#$host        = "localhost";
$port        = "5432";
$dbname      = "jasonxu";
$user = "jasonxu"; 
$password = "xzk3136";

try {
  $dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  if ($dbh) {
	echo "Connected to DB $dbname<br>";
  }
} catch ( PDOException $e) {
	echo "Error connecting to DB:".$e->getMessage();
}

# Create query of table 
try {
  $stmt = $dbh->query($sql_query);
  if ($stmt === false){
	die("Error executing the query: $sql_query");
  }
} catch (PDOExeption $e) {
  echo $e->getMessage();
}

?> 

</body>
</html>

