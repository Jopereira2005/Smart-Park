import { useState, useEffect } from "react";

export const useFetch = (url, endpoint) => {
  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(false);

  const fetchData = async () => {
    setLoading(true);

    const response = await fetch(url + endpoint);

    const json = await response.json();

    setData(json);

    setLoading(false);
  };

  useEffect(() => {
    fetchData();
  }, [url, endpoint]);

  return { data, loading, fetchData};
}

