<!DOCTYPE html>
<html>
<body>
  <div style="background: #ddd; padding: 30px; width: 100%; min-height: 500px" >
    <div style="background: #fff; padding: 30px; width: 100%; height: 100%; border-radius: 20px;">
      <!-- heading -->
      <div style="background: #000; padding: 20px; border-radius: 10px;">
        <h2 style="text-align: center; font-size: 26px; margin: 0px; color: #fff">Customer Support</h2>
      </div>

      <!-- body -->
      <div style="padding: 30px">
          
        <p style="margin-bottom: 4px"><strong>Name:</strong> {{ $the_data['name'] }}</p>
        <p style="margin-bottom: 4px"><strong>Email:</strong> {{ $the_data['email'] }}</p>
        <p><strong>Contact:</strong> {{ $the_data['contact'] }}</p>
        
        <p><strong>Service Name:</strong> {{ $the_data['service_name'] }}</p>
        
        <p style="margin-bottom: 4px"><strong>Message:</strong></p>
        <p>
         {{ $the_data['message'] }}
        </p>
      </div>
    </div>
  </div>
</body>
</html>