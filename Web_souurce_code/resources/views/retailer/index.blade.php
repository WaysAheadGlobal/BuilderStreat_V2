<!DOCTYPE html>
<html>
<head>
	<title>Lottery</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css" media="screen">
body{
  background-color:yellow;
} 
.container{width: 100%!important;}

#profile-img {
  width:93%;margin-top: 0%;
}
td{
  
}
.table td {
  padding: .01rem;
}
</style>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img id="profile-img" class="profile-img-card" src="{{ asset('img/lottery.PNG') }}" />
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-6">
              <input type="text" readonly="true" value="Limit(10) : 8102.46" style="width: 100%;background-color: yellow;color: #ba4a00;font-weight: 550;">
            </div>
            <div class="col-6">
              <input type="text" readonly="true" value="TWODIGIT Rs. 2.00-09:40 PM" style="width: 100%;background-color: yellow;color: #d13500;font-weight: 600;">
            </div>
            <div class="col-6">
              <input type="text" readonly="true" value="Id : m00005" style="width: 100%;background-color: yellow;color: #ba4a00;font-weight: 550;">
            </div>
            <div class="col-6">
              <input type="text" readonly="true" value="Draw Time : 09:40 PM" style="width: 100%;background-color: yellow;color: #ba4a00;font-weight: 550;">
            </div>
            <div class="col-12">
              <input type="text" class="text-center" readonly="true" value="ccccc" style="width: 100%;background-color: yellow;color: #ba4a00;font-weight: 550;">
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-12">
              <input type="text" readonly="true" value="01-08-2022  09:38:17 PM" style="width: 70%;background-color: yellow;padding: .5%;color: #ba4a00;font-weight: 550;font-size: 125%;">
            </div>
            <div class="col-12">
              <input type="text" class="text-center" readonly="true" value="00:01:43" style="width: 70%;background-color: yellow;color: #ba4a00;font-weight: 550;font-size: 200%;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-2" style="background: #00e200;border: 1px solid; height: 4vh;">52 CARDS</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid; height: 4vh;">12 CARDS</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid; height: 4vh;">16 CARDS</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid; height: 4vh;">4 DIGIT 5-F4</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid; height: 4vh;">STARDIGIT-F5</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid; height: 4vh;">18 CARDS 10 F6</div>
      </div>
      <div class="row">
        <div class="col-md-2" style="background: #00e200;border: 1px solid;height: 4vh;">LUCKYDIGIT 7</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid;height: 4vh;">12 CARDS</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid;height: 4vh;">16 CARDS</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid;height: 4vh;">4 DIGIT 5-F4</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid;height: 4vh;">TWODIGIT</div>
        <div class="col-md-2" style="background: #00e200;border: 1px solid;height: 4vh;">Claiming</div>
      </div>
    </div>
    <div class="col-md-1" style="height: 4vh;">
      <div class="row" style="background-color: #d3d402;">
        <p style="font-size: 10px;">V16.10.20</p>
        <p class="" style="font-size: 10px;">Exit</p>
      </div>
      <div class="row" style="background-color: #807fff;justify-content: center;">09:40 PM</div>
    </div>
    <div class="col-md-2" style="">
      <div class="row" style="background-color: #d3d402;">
        <div class="col-6" style="background-color: #79eaeb;border: 1px solid;height: 2.5vh;padding-top: -6vh;font-size: 12px;">
          <span>Re-Print</span>
        </div>
        <div class="col-6" style="background-color: #79eaeb;border: 1px solid; height: 2.5vh;padding-top: -6vh;font-size: 12px;">
          <span>Clear-M</span>
        </div>
      </div>
      <div class="row">
        <div class="col-6" style="background-color: #79eaeb;border: 1px solid; height: 2.5vh;padding-top: -6vh;font-size: 12px;"><span>Tkt Cancel</span> </div>
        <div class="col-6" style="background-color: #79eaeb;border: 1px solid; height: 2.5vh;padding-top: -6vh;font-size: 12px;"><span>Report</span></div>
      </div>
      <div class="row" style="background-color: #71e771;height: 3vh;justify-content: center;">
        <span>Result Update</span>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- <div class="col-sm"> -->
      	<!-- <h3>{{ auth()->user()->name }}</h3> -->
            <!-- <div class="col-sm">
              <form action="{{ route('retailer.logout') }}" method="post">
                @csrf 
                <button type="submit">Logout</button>
            </form> 
            </div> -->
    <!-- </div> -->
    <div class="col-md-8" style="background-color: #807fff;border: 1px solid;">
      <div class="row" style="height: 40px;background-color: #e0dc47;">
        <div class="col-4">
          <strong style="margin-top: 15px;"><span style="color: #132280;font-size: 18px;">GAME : </span><span style="color: #9c2b00;font-size: 18px;">STARDIGIT</span></strong>
        </div>
        <div class="col-4">
          <strong><span style="color: #132280;font-size: 18px;">MRP : </span><span style="color: #9c2b00;font-size: 18px;">2.00</span></strong>
        </div>
        <div class="col-4">
          <strong><span style="color: #132280;font-size: 18px;">Prize : </span><span style="color: #9c2b00;font-size: 18px;">180.00</span></strong>
        </div>
      </div>
      <table class="table">
        <tbody>
          <tr>
            <td style="width: 30px;">
              <span>00</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>01</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>02</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>03</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>04</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>05</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>06</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>07</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>08</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>09</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E0</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>00-09</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>10</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>11</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>12</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>13</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>14</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>15</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>16</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>17</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>18</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>19</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E1</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>10-19</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>20</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>21</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>22</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>23</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>24</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>25</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>26</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>27</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>28</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>29</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E2</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>20-29</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>30</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>31</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>32</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>33</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>34</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>35</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>36</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>37</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>38</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>39</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E3</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>30-39</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>40</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>41</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>42</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>43</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>44</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>45</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>46</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>47</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>48</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>49</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E4</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>40-49</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>50</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>51</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>52</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>53</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>54</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>55</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>56</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>57</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>58</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>59</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E5</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>50-59</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>60</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>61</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>62</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>63</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>64</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>65</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>66</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>67</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>68</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>69</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E6</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>60-69</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>70</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>71</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>72</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>73</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>74</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>75</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>76</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>77</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>78</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>79</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E7</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>70-79</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>80</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>81</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>82</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>83</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>84</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>85</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>86</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>87</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>88</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>89</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E8</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>80-89</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
          <tr>
            <td style="width: 30px;">
              <span>90</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>91</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>92</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>93</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>94</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>95</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>96</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>97</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>98</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>99</span>
              <input type="text" name="" style="width: 100%; margin: ">
            </td>
            <td style="width: 30px;">
              <span>E9</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
            <td style="width: 30px;">
              <span>90-99</span>
              <input type="text" name="" style="width: 100%; background-color: #fcff81; ">
            </td>
          </tr>
        </tbody>
      </table>
      <!-- <form action="{{ route('retailer.logout') }}" method="post">
        @csrf   
        <button type="submit">Logout</button>
    </form>  -->
    </div>
    <div class="col-md-4" style="height: 80vh;overflow-y: scroll;">
    	<div class="col-12" style="height: 80vh;width: 100%;background: #ffffff;border: 1px solid;">
    		<div class="row">
    			<?php
    			function create_time_range($start, $end, $interval = '30 mins', $format = '12') {
    			    $startTime = strtotime($start); 
    			    $endTime   = strtotime($end);
    			    $returnTimeFormat = ($format == '12')?'g:i':'G:i';

    			    $current   = time(); 
    			    $addTime   = strtotime('+'.$interval, $current); 
    			    $diff      = $addTime - $current;

    			    $times = array(); 
    			    while ($startTime < $endTime) { 
    			        $times[] = date($returnTimeFormat, $startTime); 
    			        $startTime += $diff; 
    			    } 
    			    $times[] = date($returnTimeFormat, $startTime); 
    			    return $times; 
    			}

    			$times = create_time_range('11:30', '14:00', '5 mins');
    			?>
    			<?php foreach($times as $key => $val){?>
    			  	<div class="col-3" style="height:90px;border: 1px solid;">
	      				<p class="g123" data-id="{{ $val }}" id={{$key}} style="font-weight: 1000;font-size: 33px;height: 40px;"></p>
	      				<p style="border-top: 1px solid;">{{ $val }}</p>
	      			</div>
    			 <?php } ?>
    		</div>
      </div>
    </div>
    
  </div>
</div>

<script>
// $(document).ready(function(){
//   var fullDate = new Date();
//   var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
   
//   var currentDate = fullDate.getFullYear() + "/" + twoDigitMonth + "/" + fullDate.getDate();
//   // console.log(currentDate);
// });

function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes;
  return strTime;
}
  

	function getRandom(ctime){
		$.ajax({
			url : '{{ url("get-lottery-numbers") }}',
      type : 'get',
			success: function(response){
				$(".g123").each(function(){
				  var nt = $(this).attr('data-id');
          var nid = $(this).attr('id');
          $(response['data']).each(function(index, value){
            if(nt == value['time']){
              $("#"+nid).text(value['numbers']);
              console.log(nid);
              console.log(value['time']);
              console.log(value['numbers']);
            }
          });
				 //  if(nt == ctime){
				 //    var nid = $(this).attr('id');
				 //    $("#"+nid).html(response['data']);

     //        $.ajax({
     //          url : '{{ url("store-lottery-numbers") }}',
     //          type : 'POST',
     //          data : {_token:"{{ csrf_token() }}",time:ctime,number:response['data']},
     //          success : function(result){
     //            console.log(result);
     //          }
     //        });

					// } else{

					// }  300000
  
				});
			}
		});	
	}

	$(document).ready(function(){
    getRandom(formatAMPM(new Date));
		setInterval(function(){
			getRandom(formatAMPM(new Date));
		}, 300000);
	});
</script>

</body>
</html>