
@extends(backpack_view('blank'))
{{-- @php
    if (config('settings.two_factor_enable'))
        $widgets['before_content'][] = [
            'type'        => 'jumbotron',
            'heading'     => trans('backpack::base.welcome'),
            'content'     => trans('backpack::base.use_sidebar'),
            'button_link' => backpack_url('logout'),
            'button_text' => trans('backpack::base.logout'),
        ];
@endphp --}}
@section('content')

@php
    // progress
    $userCount = App\Models\User::count();
    $contactCount = App\Models\Contact::count();
    $accountCount = App\Models\Account::count();
    $newsCount = App\Models\News::count();
    $widgets['after_content'][] = [
	  'type' => 'div',
	  'class' => 'row',
      'content' => [ 
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card mb-2 text-white bg-info',
                            'value'         => $userCount,
                            'description'   => trans('custom.users'),
                            'progress'      => $userCount, // integer
                            'progressClass' => 'progress-bar bg-dark',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card text-white bg-warning mb-2',
                            'value'         => $contactCount,
                            'description'   => 'Total Contacts.',
                            'progress'      => $contactCount, // integer
                            'progressClass' => 'progress-bar bg-primary',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card text-white bg-danger mb-2',
                            'value'         => $accountCount,
                            'description'   => 'Total Accounts.',
                            'progress'      => $accountCount, // integer
                            'progressClass' => 'progress-bar bg-primary',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card text-white bg-success mb-2',
                            'value'         => $newsCount,
                            'description'   => 'Total News.',
                            'progress'      => $newsCount, // integer
                            'progressClass' => 'progress-bar bg-primary',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        // tab2
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card mb-2',
                            'value'         => '11.456',
                            'description'   => 'Registered users.',
                            'progress'      => 57, // integer
                            'progressClass' => 'progress-bar bg-primary',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card mb-2',
                            'value'         => '11.456',
                            'description'   => 'Registered users.',
                            'progress'      => 57, // integer
                            'progressClass' => 'progress-bar bg-warning',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card mb-2',
                            'value'         => '11.456',
                            'description'   => 'Registered users.',
                            'progress'      => 57, // integer
                            'progressClass' => 'progress-bar bg-danger',
                            'hint'          => '8544 more until next milestone.',
                        ],
                        [
                            'type'          => 'progress_white',
                            'class'         => 'card mb-2',
                            'value'         => '11.456',
                            'description'   => 'Registered users.',
                            'progress'      => 57, // integer
                            'progressClass' => 'progress-bar bg-success',
                            'hint'          => '8544 more until next milestone.',
                        ],
      ]
    ];
    // Chart
    $widgets['after_content'][] = [
	  'type' => 'div',
	  'class' => 'row',
	  'content' => [ // widgets 

	    	[ 
		        'type' => 'chart',
		        'wrapperClass' => 'col-md-6',
		        // 'class' => 'col-md-6',
		        'controller' => \App\Http\Controllers\Admin\Charts\Lines\ChartjsLineChartController::class,
				'content' => [
				    'header' => 'Line Chart - Chartjs', // optional
				    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
		    	]
	    	],
	    	[ 
		        'type' => 'chart',
		        'wrapperClass' => 'col-md-6',
		        // 'class' => 'col-md-6',
		        'controller' => \App\Http\Controllers\Admin\Charts\Lines\EchartsLineChartController::class,
				'content' => [
				    'header' => 'Line Chart - Echarts', // optional
				    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
		    	]
	    	],
    	]
	];
    // content
    $widgets['after_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [ 
                        [
                            'type'       => 'card',
                            'wrapper' => ['class' => 'col-sm-6 col-md-3'], // optional
                            'class'   => 'card bg-dark text-white', // optional
                            'content'    => [
                                                'header' => 'Some card title', // optional
                                                'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                                            ]
                        ],
                        [
                            'type'       => 'card',
                            'wrapper' => ['class' => 'col-sm-6 col-md-3'], // optional
                            'class'   => 'card bg-info text-white', // optional
                            'content'    => [
                                                'header' => 'Some card title', // optional
                                                'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                                            ]
                        ],
                        [
                            'type'       => 'card',
                            'wrapper' => ['class' => 'col-sm-6 col-md-3'], // optional
                            'class'   => 'card bg-warning text-white', // optional
                            'content'    => [
                                                'header' => 'Some card title', // optional
                                                'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                                            ]
                        ],
                        [
                            'type'       => 'card',
                            'wrapper' => ['class' => 'col-sm-6 col-md-3'], // optional
                            'class'   => 'card bg-danger text-white', // optional
                            'content'    => [
                                                'header' => 'Some card title', // optional
                                                'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                                            ]
                        ],
                    ]
    ];
    // Pie
    $widgets['after_content'][] = [
	  'type' => 'div',
	  'class' => 'row',
	  'content' => [ // widgets 

	    	[ 
		        'type' => 'chart',
		        'wrapperClass' => 'col-md-6',
		        // 'class' => 'col-md-6',
		        'controller' => \App\Http\Controllers\Admin\Charts\Pies\ChartjsPieController::class,
				'content' => [
				    'header' => 'Pie Chart - Chartjs', // optional
				    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
		    	]
	    	],
	    	[ 
		        'type' => 'chart',
		        'wrapperClass' => 'col-md-6',
		        // 'class' => 'col-md-6',
		        'controller' => \App\Http\Controllers\Admin\Charts\Pies\EchartsPieController::class,
				'content' => [
				    'header' => 'Pie Chart - Echarts', // optional
				    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
		    	]
	    	],
	    	// [ 
		    //     'type' => 'chart',
		    //     'wrapperClass' => 'col-md-4',
		    //     // 'class' => 'col-md-6',
			// 	'controller' => \App\Http\Controllers\Admin\Charts\Pies\HighchartsPieController::class,
			// 	'content' => [
			// 	    'header' => 'Pie Chart - Highcharts', // optional
			// 	    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
		    // 	]
	    	// ],

	  ]
	];

@endphp
@endsection