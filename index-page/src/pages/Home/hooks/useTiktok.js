import axios from 'axios'

const useTiktok = async (url) => {
    let { data } = await axios.get(ENV['base.api']+'/convert.php?url='+url);

    return data;
}

export default useTiktok;