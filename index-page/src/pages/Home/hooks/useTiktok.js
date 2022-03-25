import axios from 'axios';
import basename from 'basename';

function generateBase62(length) {
    var i = 0, r = '', base62 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    while (i < length) {
        r += base62.charAt(Math.floor(Math.random() * 62));
        i++;
    }
    return r;
}

function generateDeviceId() {
    var i = 1, a = new Array(19); //Math.floor(Math.random() * 9) + 11
    a[0] = 54; //Math.floor(Math.random() * 9) + 49
    while (i < a.length) {
        a[i++] = Math.floor(Math.random() * 10) + 48;
    }
    return String.fromCharCode.apply(null, a);
}

async function getVideoId(link) {
    const a = await axios.get(link)
    const url = new URL(a.request.res.responseUrl).pathname
    return basename(url)
    //return url.split('video/')[1].split('/')[0]
}

async function useTiktok(ling) {
    try {
        let videoId = await getVideoId(ling)
        const d = new Date();
        const t = d.getTime() - d.getTimezoneOffset() * 60000;
        const url = 'https://api-t2.tiktokv.com/aweme/v1/multi/aweme/detail/'
        let params = {
            aweme_ids: '[' + videoId + ']',
            region: 'ID',
            ts: Math.floor(t / 1000),
            timezone_name: 'Asia/Jakarta',
            device_type: 'Redmi+4X',
            iid: generateDeviceId(),
            locale: 'id',
            app_type: 'normal',
            resolution: '1080*1920',
            aid: '1180',
            app_name: 'musical_ly',
            _rticket: t,
            device_platform: 'android',
            version_code: '100000',
            dpi: '441',
            cpu_support64: 'false',
            sys_region: 'ID',
            timezone_offset: '0',
            device_id: generateDeviceId(),
            'pass-route': '1',
            device_brand: 'google',
            os_version: '8.0.0',
            op_region: 'ID',
            app_language: 'en',
            'pass-region': '1',
            language: 'en',
            channel: 'googleplay'
        }
        let { data } = await axios.get(url, { params })

        return data
    } catch (error) {
        throw error
    }
}

export default useTiktok