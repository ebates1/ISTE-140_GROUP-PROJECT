use emb2065;

drop table if exists product;

create table product(
	productId int NOT NULL AUTO_INCREMENT primary key,
    productName varchar(255) not null,
    productDesc text not null,
    productCost double(5,2) not null,
    productCategory varchar(50) not null,
    productImgUrl varchar(50) not null
);


/**
* Start of all the products being inserted
*/
insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Logitech Harmony Elite', -- Product Name
'Don''t like talking and prefer controlling things the old fashioned way: by pushing buttons? The Logitech Harmony Elite is the ultimate universal remote for a reason: it controls a lot more than just TV and stereo. The pricey unit connects with the included Harmony Home Hub to control other Bluetooth, Wi-Fi, Zigbee, Z-Wave, or infrared devices in your house.', -- Product Desc
99.99,   -- Product Cost
'Remote', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Samsung SmartThings Wifi Smart Plug', -- Product Name
'If you''re looking for an inexpensive way to turn regular, non-connected home appliances into smart home devices, put the Samsung SmartThings Wifi Smart Plug at the top of your list. At $17.99, it''s one of the more affordable smart plugs we''ve come across, yet it offers a few features you usually only find on more expensive plugs including power usage reports, voice control, and flexible scheduling.', -- Product Desc
24.99,   -- Product Cost
'Outlet', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'TP-Link Kasa Smart Wi-Fi Power Strip HS300', -- Product Name
'The Kasa Smart Wi-Fi Power Strip HS300 can be controlled from your phone and with Amazon Alexa, Google Assistant, and Microsoft Cortana voice commands. It uses the same app as other Kasa devices and supports IFTTT applets to interact with third-party devices, and you can monitor energy usage for each of its six outlets.', -- Product Desc
54.99,   -- Product Cost
'Outlet', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'ADT Pulse', -- Product Name
'If you''re looking for a mature provider when it comes to smart home security, you''ve probably heard of ADT. While ADT Pulse is certainly much more expensive than a DIY system, it offers capabilities those systems simply can.', -- Product Desc
499.99,   -- Product Cost
'Security', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Ecobee Smart Thermostat With Voice Control', -- Product Name
'The new Ecobee Smart Thermostat With Voice Control is the company''s fifth-generation model, and as is the case with each Ecobee release, this new model offers more features than its predecessor, the Ecobee4.', -- Product Desc
89.99,   -- Product Cost
'Thermostat', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Nest Learning Thermostat', -- Product Name
'The Nest Learning Thermostat has Wi-Fi so you can remotely control the temperature from phone, tablet, or PC. This latest generation also has a larger display and a few more sensors than its predecessors, in addition to geofencing support and a furnace monitor.', -- Product Desc
129.99,   -- Product Cost
'Thermostat', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Philips Hue', -- Product Name
'Want complete wireless supremacy over the lights in your home? The Philips Hue line delivers with bulbs that let you control not only the intensity of the light, but also the color.', -- Product Desc
29.99,   -- Product Cost
'Lighting', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Philips Hue Family', -- Product Name
'The Hue ecosystem has been around long enough that it works with just about every other system out there, from Alexa, to IFTTT, to Siri (using the Philips Hue Bridge).', -- Product Desc
59.99,   -- Product Cost
'Lighting', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Yeelight Smart LED Bulb', -- Product Name
' It''s dimmable, offers 16 million colors, and connects to your home network wirelessly, without the need for a hub or bridge. It supports Apple HomeKit, IFTTT, and Alexa, Google, and Siri voice commands, and it''s relatively affordable at $25.99.', -- Product Desc
25.99,   -- Product Cost
'Lighting', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Ecobee Switch+', -- Product Name
'Ecobee is the first company to embed Amazon Alexa in a light switch with its $99 Ecobee Switch+. The Switch+ is more than just a smart wall switch that connects to your Wi-Fi and can be controlled using a mobile app: It can do everything an Amazon Echo does', -- Product Desc
99.99,   -- Product Cost
'Switch', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Amazon Basics Microwave', -- Product Name
'The Anova Culinary Precision Cooker uses Wi-Fi connectivity so you control it from anywhere, even when you''re not home. A big dial lets you set the desired temperature to within a tenth of a degree, display shows the set and current water temperature, and an app keeps you notified of the cooking process every step of the way.', -- Product Desc
89.99,   -- Product Cost
'Cooking', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Amazon Basics Microwave', -- Product Name
'At $59.99, it costs about the same as any other small 700-watt microwave, and instead of direct app control, you can simply use Alexa voice commands to cook. It isn''t terribly powerful, and you need a separate Echo device in order to use the voice functionality, but it''s priced similarly to models that don''t do nearly as much, making it a great buy.', -- Product Desc
59.99,   -- Product Cost
'Cooking', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Ecovacs Deebot N79S', -- Product Name
'Even if you hate cleaning, shelling out several hundred dollars for a robot vacuum can seem a little extravagant. But at $229, the Ecovacs Deebot N79S is relatively affordable, and offers more for the price than any other vacuum we''ve tested.', -- Product Desc
229.99,   -- Product Cost
'Vacuum', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'iRobot Roomba s9+', -- Product Name
'iRobot''s latest vacuum, the Roomba s9+, takes what we like about the i7+ and puts it in a new shape that''s better at reaching difficult areas, with four times the suction power. ', -- Product Desc
399.99,   -- Product Cost
'Vacuum', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'QardioBase 2', -- Product Name
'Using technology at home to make you healthier just makes good sense. For tracking fat, BMI, water, muscle mass, bone composition, and even pregnancy, look no further than the QardioBase 2.', -- Product Desc
109.99,   -- Product Cost
'Fitness', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Wyze Cam Pan', -- Product Name
'Priced at just $29.99, it offers all of the features of the earlier models, such as motion and sound detection, time-lapse recording, and free cloud storage, and it adds mechanical pan and tilt and support for IFTTT applets.', -- Product Desc
29.99,   -- Product Cost
'Security', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Ring Video Doorbell Pro', -- Product Name
'It''s fairly easy to install, sports a slender design with interchangeable faceplates, and delivers sharp 1080p video day and night.', -- Product Desc
99.99,   -- Product Cost
'Security', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'August Smart Lock Pro + Connect', -- Product Name
'This third-generation smart lock offers all the bells and whistles you get with the HomeKit model, and adds a few new features, including August''s DoorSense technology, Z-Wave compatibility, and Wi-Fi connectivity. ', -- Product Desc
159.99,   -- Product Cost
'Security', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Brilliant Control', -- Product Name
'Unique wall switch that uses Wi-Fi to connect to and control various smart devices in your home. It has a 5-inch color touch screen with user-friendly button controls that let you play music, control lighting, set thermostat temperatures, and see who is at your door, among other things.', -- Product Desc
89.99,   -- Product Cost
'Switch', -- Product Category
'productimages/productcard-'  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Amazon Echo', -- Product Name
'The Amazon Echo is a Bluetooth speaker powered by Alexa, Amazon''s handy voice assistant. Alexa works with a number of smart home devices directly, as well as with If This Then That (IFTTT) to control plenty of others via "recipes" you can create yourself.', -- Product Desc
59.99,   -- Product Cost
'Speaker', -- Product Category
'productimages/productcard-'  -- Product Image Url
);